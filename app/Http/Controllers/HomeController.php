<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\fichaPR;
use App\blocoPR;
use Gate;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    private $fichaPR;
    private $blocoPR;
    private $totalPage = 5;

    public function __construct(fichaPR $fichaPR, blocoPR $blocoPR){
    	$this->fichaPR = $fichaPR;
      $this->blocoPR = $blocoPR;

    }
    public function listaFuncionario(){
    	return"funcionarios";

    }
    public function viewFichaPR(){
    	$fichas = $this->fichaPR->orderBy('contribuinte')->paginate($this->totalPage);
    	return view('fichaProduRural', compact('fichas'));
    }

    public function viewFormFichaPR(){
    	//$fichas = $this->fichaPR->all();
    	return view('formAddFichaPR');
    }

    public function cadFichaPR($id){
        //$id = $request->id;
        //dd($id);
        $dados = FichaPR::find($id);
        $nCond = $dados->cond;
        switch($nCond){
           case 1: $textoCond = "Proprietário";
                    break;
           case 2: $textoCond = "Condômino";
                    break;
           case 3: $textoCond = "Arrendatário";
                    break;
           case 4: $textoCond = "Usufrutuário";
                    break;
           case 5: $textoCond = "Parceiro";
                    break;
           case 6: $textoCond = "Comodatário";
                    break;
           case 7: $textoCond = "Pescador";
                    break;
           case 8: $textoCond = "Posseiro";
                    break;
           case 9: $textoCond = "NV Proprietário";
                    break;
           case 10: $textoCond = "Mutuário";
                    break;
           case 11: $textoCond = "Quilombola";
                    break;
           case 12: $textoCond = "Co-proprietário";
                    break;
        }
        $dados["textoCond"] = $textoCond;
        #return view('fichaPRCadSucesso')->with('id',$id);
        return view ('fichaPRCadSucesso', array('dados' => $dados));
    }

    public function addFicha(Request $request){
        
        //dd($request->all());
        $dados = $request->except('_token');
        $insert= $this->fichaPR->create($dados);
        $id = $insert->id;

        if ($insert)
            return HomeController::cadFichaPR($id);
            //return redirect('viewCadFichaPR')->withId($id);
        else
            return redirect()->back();
    }

    public function buscaFichaPR(Request $request){
        $dados = $request->except('_token');
        $inscricao = $request->input('pesquisar');
        
        $dados = FichaPR::where(function($query) use($inscricao){
            if($inscricao)
                $query->where('inscEstadual', '=', $inscricao);
        })->get();
        if (empty($dados[0])){
            $dados["id"] = "Não foi localizado Inscrição!";
            return view ('fichaPRDetalhes')->with('dados',$dados["id"]);
        }    
        else {    
            $nCond = $dados[0]->cond;
            switch($nCond){
                case 1: $textoCond = "Proprietário";
                    break;
                case 2: $textoCond = "Condômino";
                    break;
                case 3: $textoCond = "Arrendatário";
                    break;
                case 4: $textoCond = "Usufrutuário";
                    break;
                case 5: $textoCond = "Parceiro";
                    break;
                case 6: $textoCond = "Comodatário";
                    break;
                case 7: $textoCond = "Pescador";
                    break;
                case 8: $textoCond = "Posseiro";
                    break;
                case 9: $textoCond = "NV Proprietário";
                    break;
                case 10: $textoCond = "Mutuário";
                    break;
                case 11: $textoCond = "Quilombola";
                    break;
                case 12: $textoCond = "Co-proprietário";
                    break;
            }
            $dados[0]["textoCond"] = $textoCond;
            return view ('fichaPRDetalhes')->with('dados',$dados[0]);
       }
        
    }

    public function viewDetalhes (Request $request){
        $id = $request->id;
        $dados = FichaPR::find($id);
        $nCond = $dados->cond;
        switch($nCond){
           case 1: $textoCond = "Proprietário";
                    break;
           case 2: $textoCond = "Condômino";
                    break;
           case 3: $textoCond = "Arrendatário";
                    break;
           case 4: $textoCond = "Usufrutuário";
                    break;
           case 5: $textoCond = "Parceiro";
                    break;
           case 6: $textoCond = "Comodatário";
                    break;
           case 7: $textoCond = "Pescador";
                    break;
           case 8: $textoCond = "Posseiro";
                    break;
           case 9: $textoCond = "NV Proprietário";
                    break;
           case 10: $textoCond = "Mutuário";
                    break;
           case 11: $textoCond = "Quilombola";
                    break;
           case 12: $textoCond = "Co-proprietário";
                    break;
        }
        $dados["textoCond"] = $textoCond;

        $blocos = BlocoPR::where(function($query) use($id){
            if($id)
                $query->where('idProdutor', '=', $id);
        })->paginate(5);
        return  view ('fichaPRDetalhes', array('dados' => $dados),compact('blocos'));
    }

    public function atualizaFichaPR (Request $request){
        $id = $request->id;
        $dados = FichaPR::find($id);
        $nCond = $dados->cond;
        switch($nCond){
           case 1: $textoCond = "Proprietário";
                    break;
           case 2: $textoCond = "Condômino";
                    break;
           case 3: $textoCond = "Arrendatário";
                    break;
           case 4: $textoCond = "Usufrutuário";
                    break;
           case 5: $textoCond = "Parceiro";
                    break;
           case 6: $textoCond = "Comodatário";
                    break;
           case 7: $textoCond = "Pescador";
                    break;
           case 8: $textoCond = "Posseiro";
                    break;
           case 9: $textoCond = "NV Proprietário";
                    break;
           case 10: $textoCond = "Mutuário";
                    break;
           case 11: $textoCond = "Quilombola";
                    break;
           case 12: $textoCond = "Co-proprietário";
                    break;
        }
        $dados["textoCond"] = $textoCond;
        return view('formEditFichaPR', array('dados' => $dados));
    }

    public function  updateFichaPR (Request $request){
      $id = $request->id;
      $dados = FichaPR::find($id);
      if ($dados && $dados->exists){
        $parametros = $request->all();
        $dados->fill($parametros)->save();
      }
      $caminho = $id . '/view';
      
      return redirect()->to($caminho);
    }

    public function  viewFormBlocos(Request $request){
      $id = $request->id;
      return view('formAddBlocos')->with('id',$id);
    }

    public function  addBlocosPR(Request $request){
      $dados = $request->except('_token');
      $idProdutor = $request->id;
      $dados["idProdutor"] = $idProdutor;

      $insert= $this->blocoPR->create($dados);
      $id = $insert->id;

        if ($insert){
          $caminho = $idProdutor . '/view';
          return redirect()->to($caminho);
        }  
        else
          return redirect()->back();
    }
}
