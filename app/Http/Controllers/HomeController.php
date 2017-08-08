<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\fichaPR;
use Gate;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function __construct(){
    	//
    }
    public function listaFuncionario(){
    	return"funcionarios";

    }
    public function viewFichaPR(){
    	return view('fichaProduRural');

    }
}
