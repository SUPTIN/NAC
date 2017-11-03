<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\fichaPR;
use Gate;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    private $fichaPR;

    public function __construct(fichaPR $fichaPR){
    	$this->fichaPR =$fichaPR;
    	//
    }
    public function listaFuncionario(){
    	return"funcionarios";

    }
    public function viewFichaPR(){
    	$fichas = $this->fichaPR->all();
    	return view('fichaProduRural', compact('fichas'));
    }
    public function viewFormFichaPR(){
    	//$fichas = $this->fichaPR->all();
    	return view('formAddFichaPR');
    }
    public function addFicha(){
        

        return "cadastrado com sucesso!";
    }

}
