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
    private $totalPage = 5;

    public function __construct(fichaPR $fichaPR){
    	$this->fichaPR =$fichaPR;

    	//
    }
    public function listaFuncionario(){
    	return"funcionarios";

    }
    public function viewFichaPR(){
    	$fichas = $this->fichaPR->paginate($this->totalPage);
    	return view('fichaProduRural', compact('fichas'));
    }
    public function viewFormFichaPR(){
    	//$fichas = $this->fichaPR->all();
    	return view('formAddFichaPR');
    }
    public function viewCadFichaPR(Request $dados){
        return 'to nulicar certo';

    }

    public function addFicha(Request $request){
        
        //dd($request->all());
        $dados = $request->except('_token');
        $insert= $this->fichaPR->create($dados);

        if ($insert)
            return redirect('vieCadFichaPR', compact('dados'));
        else
            return redirect()->back();
        return ;
    }

}
