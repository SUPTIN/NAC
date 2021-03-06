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
    private $totalPage = 20;

    public function __construct(fichaPR $fichaPR, blocoPR $blocoPR){
    	$this->fichaPR = $fichaPR;
      $this->blocoPR = $blocoPR;

    }
    public function  informacao (){ 
      return view('informacao');
    }
    public function listaFuncionario(){
    	return"funcionarios";

    }
    public function viewFichaPR(){
    	$fichas = $this->fichaPR->orderBy('contribuinte')->paginate($this->totalPage);
    	return view('fichaProduRural', compact('fichas'));
    }

    public function viewFormFichaPR(){
    	return view('formAddFichaPR');
    }

    public function cadFichaPR($id){
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
           case 13: $textoCond = "Informação desconhecida";
                    break;
        }
        $dados["textoCond"] = $textoCond;
        $blocos = BlocoPR::where(function($query) use($id){
              if($id)
                $query->where('idProdutor', '=', $id);
            })->paginate($this->totalPage);
        $caminho = $id.'/view';
            return redirect()->to($caminho);
    }

    public function addFicha(Request $request){
        $dados = $request->except('_token');
        if (empty($request->notasEntregue))
            $dados["notasEntregue"] = "Informação desconhecida";
        if (empty($request->cond))
            $dados["cond"] = "13";
        if (empty($request->cpf))
            $dados["cpf"] = "Informação desconhecida";
        if (empty($request->endereco))
            $dados["endereco"] = "Informação desconhecida";
        if (empty($request->nINCRA))
            $dados["nINCRA"] = "Informação desconhecida";
        if (empty($request->vencContrato))
            $dados["vencContrato"] = "Informação desconhecida";
        if (empty($request->nirf))
            $dados["nirf"] = "Informação desconhecida";
        if (empty($request->telefone))
            $dados["telefone"] = "Informação desconhecida";
        if (empty($request->pontoReferencia))
            $dados["pontoReferencia"] = "Informação desconhecida";
        if (empty($request->identidade))
            $dados["identidade"] = "Informação desconhecida";

        $this->validate($request, $this->fichaPR->rules, $this->fichaPR->messages);

        $insert= $this->fichaPR->create($dados);
        $id = $insert->id;

        if ($insert)
            return HomeController::cadFichaPR($id);
        else
            return redirect()->back();
    }

    public function listagemBusca($contribuinte){
      $fichas = FichaPR::where(function($query) use($contribuinte){
             if($contribuinte)
                $query->where('contribuinte', 'like', '%'.$contribuinte.'%');
          })->paginate($this->totalPage);
      if (empty($fichas[0])){
            $dados["id"] = "Não foi localizado Inscrição!";
            return view ('fichaPRDetalhes')->with('dados',$dados["id"]);
          } else{
            return view('listaPRBusca', array('fichas'=>$fichas));
          }   
      
    }

    public function buscaFichaPR(Request $request){
        //$totalPage = $this->$totalPage;
        $dados = $request->except('_token');
        $tipoBusca = $request->input('tipoBusca');

        if ($tipoBusca == 'inscricao'){
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
                case 13: $textoCond = "Informação desconhecida";
                    break;
            }
            $dados[0]["textoCond"] = $textoCond;
            $id = $dados[0]["id"];
            $blocos = BlocoPR::where(function($query) use($id){
              if($id)
                $query->where('idProdutor', '=', $id);
            })->paginate($this->totalPage);
            $caminho = $id.'/view';
            return redirect()->to($caminho);
          }
        
        }else{
          //pode melhorar campos de pesquisa nome unico $contribuinte $inscricao
          $contribuinte = $request->input('pesquisar');  
          return HomeController::listagemBusca($contribuinte);
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
           case 13: $textoCond = "Informação desconhecida";
                    break;
        }
        $dados["textoCond"] = $textoCond;

        $blocos = BlocoPR::where(function($query) use($id){
            if($id)
                $query->where('idProdutor', '=', $id);
        })->paginate($this->totalPage);
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
           case 13: $textoCond = "Informação desconhecida";
                    break;
        }
        $dados["textoCond"] = $textoCond;
        return view('formEditFichaPR', array('dados' => $dados));
    }

    public function  updateFichaPR (Request $request){
      $id = $request->id;
      $dados = FichaPR::find($id);
      $this->validate($request, $this->fichaPR->rules, $this->fichaPR->messages);
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

      $this->validate($request, $this->blocoPR->rules, $this->blocoPR->messages);

      $insert= $this->blocoPR->create($dados);
      $id = $insert->id;

        if ($insert){
          $caminho = $idProdutor . '/view';
          return redirect()->to($caminho);
        }  
        else
          return redirect()->back();
    }

    public function  atualizaBlocoPR (Request $request){
      $id = $request->id;
      $dados = BlocoPR::find($id);
      return view('formEditBlocoPR', array('dados' => $dados));
    }

    public function  updateBlocoPR (Request $request){
      $id = $request->id;
      $idProdutor = $request->idProdutor;
      $this->validate($request, $this->blocoPR->rules, $this->blocoPR->messages);
      $dados = BlocoPR::find($id);
      if ($dados && $dados->exists){
        $parametros = $request->all();
        $dados->fill($parametros)->save();
      }
      $caminho = $idProdutor . '/view';
      
      return redirect()->to($caminho);
    }


    public function  estatisticas (){ 
      $totalFichaPR = 0;
      for ($i = 1; $i <= 13; $i++){
        $contador = FichaPR::where(function($query) use($i){
             if($i)
                $query->where('cond', '=', $i);
          })->count();

        $totalFichaPR = $totalFichaPR + $contador;

        switch($i){
           case 1: $dados["Proprietário"] = $contador;
                    break;
           case 2: $dados["Condômino"]= $contador;
                    break;
           case 3: $dados["Arrendatário"] = $contador;
                    break;
           case 4: $dados["Usufrutuário"] = $contador;
                    break;
           case 5: $dados["Parceiro"] = $contador;
                    break;
           case 6: $dados["Comodatário"] = $contador;
                    break;
           case 7: $dados["Pescador"] = $contador;
                    break;
           case 8: $dados["Posseiro"] = $contador;
                    break;
           case 9: $dados["NV Proprietário"] = $contador;
                    break;
           case 10: $dados["Mutuário"] = $contador;
                    break;
           case 11: $dados["Quilombola"] = $contador;
                    break;
           case 12: $dados["Co-proprietário"] = $contador;
                    break;
           case 13: $dados["Informação desconhecida"] = $contador;
                    break;
        }

      }
      $dados["totalFichaPR"] = $totalFichaPR;
      //return $dados["Informação desconhecida"];
      //return $dados;
      //$dados = 0;
      return view('dadosEstatistica', compact('dados'));
    }
}
