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

    public function edit( $id )
    {
        $team = Team::find($id);

        return view('team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, Team::$rules, [], Team::$niceNames);

        $team = Team::find($id);
        /*$team->fill([
            'name'      => (string)$request->get( 'name' ),
            'des'       => (string)$request->get( 'des' ),
        ]);*/

        $team->name = $request->get( 'name' );
        $team->des = $request->get( 'des' );

        $team->save();
        return redirect('/app/team')->with('msg', "Se ha editado correctamente el modelo");
    } 


    public function destroy( $id )
    {
        $team = Team::find($id);

        $team->users()->detach();

        $team->models()->detach();
        
        $team->destroy($id);

        return response()->json(["msg" => "realizado !"]);
    }

    public function getUsersFromTeam($id){
        $ids = [];
        $users = Team::find($id)->users;

        foreach ($users as $user) {
            array_push($ids, $user->id);
        }

        return response()->json(["ids" => $ids]);
    }

    public function exitTeam($id){
        
        $team = Team::find($id);

        $team->users()->detach(Auth::id());

        return response()->json(["msg" => "exit !!"]);
    }

    public function updateUsers(Request $request, $id){

        /*$team = Team::find($id);

        $users = $request['users'];

        $team->users()->detach();

        if ($users != null){
            foreach ($users as $user) {
                if ($user != Auth::id()){
                    $team->users()->attach($user);
                }
            }    
        }

        $team->users()->attach(Auth::id());*/

        //algoritmo optimizado:

        $team = Team::find($id);

        $users = $team->users;

        $usersUpdate = $request['users'];

        if ($usersUpdate == null){
             $usersUpdate = [];
        }

        array_push($usersUpdate, Auth::id());

        //elimina los usuarios que no vengan
        foreach ($users as $user) {
            $flag = false;
            foreach ($usersUpdate as $userU) {
                if ($user->id == $userU){
                    //si viene, seteamos flag
                    $flag = true;
                }
            }
            // si no viene, lo eliminamos
            if (!$flag){
                $team->users()->detach($user->id);
            }
        } 

        //agrega los usuarios que vengan
        foreach ($usersUpdate as $userU) {
            $flag = false;
            foreach ($users as $user) {
                if ($userU == $user->id){
                    // Si el que viene esta, true
                    $flag = true;
                }
            }
            // si no esta
            if (!$flag){
                $team->users()->attach($userU);
            }
        }   

        return response()->json(["msg" => "realizado  !!"]);
    }
}
