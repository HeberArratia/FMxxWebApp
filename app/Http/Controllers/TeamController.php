<?php

namespace FMxx\Http\Controllers;

use Illuminate\Http\Request;
use FMxx\Team;
use FMxx\User;
use Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	
        $teamsC = [];
        $user = User::find(Auth::id());

        $teams = $user->teams;

        foreach ($teams as $team) {
            $newColumn = $team;
            $currentUser = User::find($team->user_id);

            if ($currentUser->id == Auth::id()){
               $newColumn['creator'] = "Creado por mi"; 
            } else {
              $newColumn['creator'] = $currentUser->email;
            } 
            array_push($teamsC, $newColumn);
        }

        $users = User::where('id', '<>', Auth::id())->get();

        return view('team.index', compact('teamsC', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('team.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, Team::$rules, [], Team::$niceNames);

        $team = Team::create([
            'user_id'   => Auth::id(),
            'name'      => $request['name'],
            'des'       => $request['des'],
        ]);

        $team->users()->attach(Auth::id());

        return redirect('/app/team/')->with('msg', "Se ha creado el equipo correctamente");
    }

    public function getUsersFromTeam($id){
        $ids = [];
        $users = Team::find($id)->users;

        foreach ($users as $user) {
            array_push($ids, $user->id);
        }

        return response()->json(["ids" => $ids]);
    }

    public function updateUsers(Request $request, $id){

        $team = Team::find($id);

        $users = $request['users'];

        $team->users()->detach();

        if ($users != null){
            foreach ($users as $user) {
                if ($user != Auth::id()){
                    $team->users()->attach($user);
                }
            }    
        }

        $team->users()->attach(Auth::id());

        return response()->json(["msg" => "realizado  !!"]);
    }
}
