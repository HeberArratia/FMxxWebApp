<?php

namespace FMxx\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Redirect;
use FMxx\User;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('user.create');
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

        $niceNames = array(
            'lastname' => 'apellido'
        );

        $this->validate($request, User::$rules, [], $niceNames);

    	User::create([
    		'name' => $request['name'],
    		'lastname' => $request['lastname'],
    		'email' => $request['email'],
    		'password' => bcrypt($request['password']),
    		'type' => 1,
    	]);
    	return redirect('/app');  
    }

    public function showLogin(){
        return view('user.login');
    }

    public function login(Request $request){
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect('/app/model');
        }
        return redirect('/app')->with('msg', "Los datos son incorrectos");
    }

    public function logout(){
        Auth::logout();
        return redirect('/app'); 
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
