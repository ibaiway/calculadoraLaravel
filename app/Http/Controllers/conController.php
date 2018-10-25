<?php

namespace App\Http\Controllers;

use App\Users;
use App\Http\Controllers;
use Illuminate\Http\Request;


class conController extends Controller {

     public function index(Request $request){
	$nombre = $request -> input('nombre');
    return view('calculadora',array('nombre' => $nombre));
} 
	 public function calcular(Request $request){
		$number1= $request -> input('numero1');
		$number2= $request -> input('numero2');
		$nombre = $request -> input('nombre');
		$calcular = $request -> input('calcular');
		$error="";
		switch ($calcular) {
			case 'suma':
				$resultado = $number1+$number2;
				break;
			case 'resta':
				$resultado = $number1-$number2;
				break;
			case 'multi':
				$resultado = $number1*$number2;
				break;
			case 'divi':
				if ($number2 == 0) {
					$resultado = 'ERROR';
					$error = 'No se puede dividir entre 0';
				}else{
				$resultado = $number1/$number2;
				}
				break;
			case 'elevado':
				$resultado = pow($number1,$number2);
				break;
			
			default:
				# code...
				break;
		}

    	return view('calculadora',array('resultado' => $resultado, 'nombre' => $nombre, 'number1' => $number1, 'number2' => $number2, 'error' => $error));
	}

}
