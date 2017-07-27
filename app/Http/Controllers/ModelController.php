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
            array_push($modelDatas, $model->model_datas->last());
        }

        return view('model.index', compact('modelDatas'));
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
        $model = Modelo::create([
            'user_id' => Auth::id(),
        ]);

        $modelDataID = ModelData::create([
            'name' => $request['name'],
            'des' => $request['des'],
            'path' => 'pruebapath',
        ])->id;

        $model->model_datas()->attach($modelDataID);

        return "si";
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
        
    }

    public function showtest()
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
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
        
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
