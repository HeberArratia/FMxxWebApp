<?php

namespace FMxx\Http\Controllers;

use Illuminate\Http\Request;
use FMxx\Model as Modelo;
use FMxx\ModelData;
use FMxx\Team;
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

        $teams = Team::all();   

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

        $modelId = $id;

        $modelData = $model->model_datas->last();

        return view('model.edit', compact('modelData', 'modelId'));
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

        $modelDataID = ModelData::create([
            'name' => $request['name'],
            'des' => $request['des'],
            'path' => $nameImg,
        ])->id;

        \Storage::disk('local')->put($nameImg, \File::get($request['path']));

        $model->model_datas()->attach($modelDataID);

        return redirect('/app/model')->with('msg', "Se ha creado una nueva versión del modelo");
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

        $datas = $model->model_datas;

        foreach ($datas as $data) {
            $data->delete();
        }

        $model->model_datas()->detach();
        
        $model->destroy($id);

        return response()->json(["msg" => "una cosa yo sé, tu id: ".$id]);
    }

    public function updateTeams(Request $request, $id){

        $model = Modelo::find($id);

        $model->teams()->attach(3);

        return response()->json(["msg" => "una cosa yo sé, tu id: ".$id, "teams" => json_encode($request['teams']) ]);
    }
}
