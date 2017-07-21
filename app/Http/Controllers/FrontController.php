<?php

namespace FMxx\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function home(){
    	return view('front.index');
    }
}
