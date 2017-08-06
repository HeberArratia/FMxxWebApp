<?php

namespace FMxx\Http\Controllers;

use Illuminate\Http\Request;
use FMxx\Team;
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
       //CAMBIAR: listar solo los que pertenecen al usuario 
       $teams = Team::all();	
       return view('team.index', compact('teams'));
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
}
