<?php

namespace FMxx\Http\Controllers;

use Illuminate\Http\Request;
use FMxx\Model as Modelo;
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

    public function show( $id )
    {

        //validar que lo pueda ver solo si lo cree o pertenezco http://127.0.0.1:8000/app/team/8

        $team = Team::find($id);


        if ($this->validateAccess($team->id)){
            $users = $team->users;

            $author = User::find($team->user_id);
            $authorName = $author->name . " " . $author->lastname;
            $authorMail = $author->email;

            $modelsParent = $team->models;
            $models = [];
            foreach ($modelsParent as $modelParent) {
                $newColumn = $modelParent->model_datas->last();
                $newColumn['modelId'] = $modelParent->id;
                $newColumn['modelAuthor'] = User::find($modelParent->user_id)->email;
                array_push($models, $newColumn);
            }

            return view('team.show', compact('team', 'users', 'models', 'authorName', 'authorMail'));
        }
        return redirect('/app/team');
    }

    public function showModel($idTeam, $idModel, $idDes = 0){

        $team = Team::find($idTeam);

        if ($this->validateAccess($team->id)){

            $models = $team->models;
            $model = Modelo::find($idModel);

            //validamos que modelo se encuentre en team
            $flag = false;
            foreach ($models as $m) {
                if ($m->id == $model->id){
                    $flag = true;
                    break;
                }
            }

            if($flag){

                $modelAuthor = User::find($model->user_id);
                $modelAuthorName = $modelAuthor->name . " " . $modelAuthor->lastname;
                $modelAuthorMail = $modelAuthor->email;

                $datas = $model->model_datas->reverse();

                $count = $datas->count();

                $currentData = null;

                if ($idDes == 0){
                    $currentData = $datas->first();
                } else {
                    $currentData = $datas->find($idDes);
                }
                
                return view('team.showModel', compact('model', 'team', 'datas', 'modelAuthorName', 'modelAuthorMail','currentData', 'count'));
            } 
          return redirect('/app/team'); 
        } 
        return redirect('/app/team');
    }

    public function edit( $id )
    {
        $team = Team::find($id);

        //valido que el team sea del propiedad del usuario
        if ($team->user_id == Auth::id()){

            return view('team.edit', compact('team'));
        }
        return redirect('/app/team');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, Team::$rules, [], Team::$niceNames);

        $team = Team::find($id);

        if ($team->user_id == Auth::id()){

            $team->name = $request->get( 'name' );
            $team->des = $request->get( 'des' );

            $team->save();
            return redirect('/app/team')->with('msg', "Se ha editado correctamente el modelo");
        }
        return redirect('/app/team');
    } 


    public function destroy( $id )
    {
        $team = Team::find($id);

        if ($team->user_id == Auth::id()){

            $team->users()->detach();

            $team->models()->detach();
            
            $team->destroy($id);

            return response()->json(["msg" => "realizado !"]);
        }
        return response()->json(["msg" => "error"]);
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

        if($this->validateAccess($team->id)){

            $team->users()->detach(Auth::id());

            $models = $team->models;
            foreach ($models as $model) {
                if($model->user_id == Auth::id()){
                    $team->models()->detach($model->id);
                }
            }

            return response()->json(["msg" => "exit !!"]);
        }
        return response()->json(["msg" => "error"]);
    }

    public function updateUsers(Request $request, $id){

        $team = Team::find($id);

        if ($team->user_id == Auth::id()){

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
                    $models = $team->models;
                    foreach ($models as $model) {
                        if($model->user_id == $user->id){
                            $team->models()->detach($model->id);
                        }
                    }
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
        return response()->json(["msg" => "error"]);
    }

    private function validateAccess($idTeam){
        $user = User::find(Auth::id());
        $flag = false;
        $teams = $user->teams;
        foreach ($teams as $t) {
            if ($t->id == $idTeam){
                $flag = true;
                break;
            }
        }
        if ($flag){
            return true;
        }
        return false;
    }
}
