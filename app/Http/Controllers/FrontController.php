<?php

namespace FMxx\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    function home(){
    	return view('front.index');
    }

    public function contactar(Request $request){
    	$name = $request['name'];
		$email = $request['mail'];
		$mensaje = $request['msg'];
		$asunto = $request['asunto'];
		$para = 'heber.im87@gmail.com';
		$titulo = 'Mensaje FMxx-WEBPAGE: '.$asunto;
		$header = 'From: ' . $email;
		$msjCorreo = "Nombre: $name\n E-Mail: $email\n Mensaje:\n $mensaje";

		if ($name !== "" and $email !== "" and $mensaje !== ""){
			if (mail($para, $titulo, $msjCorreo, $header)) {
				return response()->json(["msg" => "1"]);
			} else {
				return response()->json(["msg" => "2"]);
			}
		}
		return response()->json(["msg" => "2"]);		
    }
}
