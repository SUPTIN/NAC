@extends('layout.app')
@section('content')
<div class="container">

	<h3 class="title"> 
		Novo Bloco para Inscrição - Nome Produtos
    <a class="add" href="{{ URL::previous() }}" >
        <i class="fa fa-backward" aria-hidden="true" title="Voltar página"></i>
    </a>
	</h3>
    <form method="post" action="updateBPR">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
     <input type="hidden" name="id" value="{{ $dados->id }}" />
     <input type="hidden" name="idProdutor" value="{{ $dados->idProdutor }}" />
    <div class="row">
	    <div class="form-group col-md-6">
	  	    <label >Data: </label>
             <input class="form-control" size="16" type="text" name="date" id="date" placeholder="dd/mm/yyyy" value="{{$dados->date}}"/>
      </div>
	    <div class="form-group col-md-6" >
	  	   <label >Numeração: </label>
         <input class="form-control"  name="numeracao" value="{{$dados->numeracao}}"/>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6" >
    	  <label >Quantidade: </label>
         <input class="form-control"  name="quantidade" value="{{$dados->quantidade}}"/>
      </div>
	    <div class="form-group col-md-6" >
	  	  <label >Aut. Nº: </label>
        <input class="form-control"  name="autN" value="{{$dados->autN}}"/>
      </div>
     </div>

    <button class="btn btn-primary">Atualizar Bloco</button>
  </form>
</div>
@endsection