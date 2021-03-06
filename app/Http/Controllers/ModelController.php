<?php

namespace FMxx\Http\Controllers;

use Illuminate\Http\Request;
use FMxx\Model as Modelo;
use FMxx\ModelData;
use FMxx\Team;
use FMxx\User;
use Auth;

class ModelController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelDatas = [];
        $models = Modelo::where('user_id', Auth::id())->orderBy('created_at','DESC')->get();
        foreach ($models as $model) {
            //$newColumn = ["lastData" => $model->model_datas->last(), "model" => $model];
            $newColumn = $model->model_datas->last();
            $newColumn['modelCreate'] = $model->created_at;
            $newColumn['modelId'] = $model->id;
            array_push($modelDatas, $newColumn);
        }

        $user = User::find(Auth::id());

        $teams = $user->teams;   

        return view('model.index', compact('modelDatas', 'models', 'teams'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('model.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {

        $this->validate($request, Modelo::$rules, [], Modelo::$niceNames);

        $nameImg = time().'-'.$request['path']->getClientOriginalName();

        $model = Modelo::create([
            'user_id' => Auth::id(),
        ]);

        $modelDataID = ModelData::create([
            'name' => $request['name'],
            'des' => $request['des'],
            'path' => $nameImg,
        ])->id;

        \Storage::disk('local')->put($nameImg, \File::get($request['path']));

        $model->model_datas()->attach($modelDataID);

        return redirect('/app/model')->with('msg', "Se ha creado el modelo correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {

        return redirect('/app'); 
    }

    public function showModel($idModel, $idDes = 0){

        $model = Modelo::find($idModel);

        if ($model->user_id == Auth::id()){

            $datas = $model->model_datas->reverse();

            $count = $datas->count();

            $currentData = null;

            if ($idDes == 0){
                $currentData = $datas->first();
            } else {
                $currentData = $datas->find($idDes);
            }
        
        return view('model.show', compact('model', 'datas', 'currentData', 'count'));
        }
        return redirect('/app');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $model = Modelo::find($id);

        if ($model->user_id == Auth::id()){

            $modelId = $id;

            $modelData = $model->model_datas->last();

            return view('model.edit', compact('modelData', 'modelId'));
        }
        return redirect('/app');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, Modelo::$rules, [], Modelo::$niceNames);

        $nameImg = time().'-'.$request['path']->getClientOriginalName();

        $model = Modelo::find($id);

        if ($model->user_id == Auth::id()){

            $modelDataID = ModelData::create([
                'name' => $request['name'],
                'des' => $request['des'],
                'path' => $nameImg,
            ])->id;

            \Storage::disk('local')->put($nameImg, \File::get($request['path']));

            $model->model_datas()->attach($modelDataID);

            return redirect('/app/model')->with('msg', "Se ha creado una nueva versión del modelo");

        }
        return redirect('/app');
    }    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $model = Modelo::find($id);

        if ($model->user_id == Auth::id()){

            $datas = $model->model_datas;

            foreach ($datas as $data) {
                $data->delete();
            }

            $model->teams()->detach();

            $model->model_datas()->detach();
            
            $model->destroy($id);

            return response()->json(["msg" => "realizado"]);
        }
        return response()->json(["msg" => "error"]);
    }

    public function getTeamsFromModel($id){
        $ids = [];
        $teams = Modelo::find($id)->teams;

        foreach ($teams as $team) {
            array_push($ids, $team->id);
        }

        return response()->json(["ids" => $ids]);
    }

    public function updateTeams(Request $request, $id){

        $model = Modelo::find($id);

        if ($model->user_id == Auth::id()){

            $teams = $model->teams;

            $teamsUpdate = $request['teams'];

            if ($teamsUpdate == null){
                 $teamsUpdate = [];
            }

            //elimina los equipos que no vengan
            foreach ($teams as $team) {
                $flag = false;
                foreach ($teamsUpdate as $teamU) {
                    if ($team->id == $teamU){
                        //si viene, seteamos flag
                        $flag = true;
                    }
                }
                // si no viene, lo eliminamos
                if (!$flag){
                    $model->teams()->detach($team->id);
                }
            } 

            //agrega los equipos que vengan
            foreach ($teamsUpdate as $teamU) {
                $flag = false;
                foreach ($teams as $team) {
                    if ($teamU == $team->id){
                        // Si el que viene esta, true
                        $flag = true;
                    }
                }
                // si no esta
                if (!$flag){
                    $model->teams()->attach($teamU);
                }
            }   


            return response()->json(["msg" => "realizado  !!"]);
        }   
        return response()->json(["msg" => "error"]);    
    }
}
