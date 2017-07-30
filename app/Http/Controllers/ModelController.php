<?php

namespace FMxx\Http\Controllers;

use Illuminate\Http\Request;
use FMxx\Model as Modelo;
use FMxx\ModelData;
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

        return view('model.index', compact('modelDatas', 'models'));
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

        $model = Modelo::create([
            'user_id' => Auth::id(),
        ]);

        $modelDataID = ModelData::create([
            'name' => $request['name'],
            'des' => $request['des'],
            'path' => $request['path']->getClientOriginalName(),
        ])->id;

        \Storage::disk('local')->put($request['path']->getClientOriginalName(), \File::get($request['path']));

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
        return view('model.show');
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

        $model = Modelo::find($id);

        $modelDataID = ModelData::create([
            'name' => $request['name'],
            'des' => $request['des'],
            'path' => $request['path']->getClientOriginalName(),
        ])->id;

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

    }
}
