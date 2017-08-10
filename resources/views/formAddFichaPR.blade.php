@extends('layout.app')
@section('content')
<div class="container">

	<h1 class="title"> 
		Nova Ficha Produtor Rural
	</h1>
    
    <!-- Tem que habilitar <input type="hidden" name="_token" value="{{ csrf_token() }}" /> -->
    <div class="row">
	  <div class="form-group col-md-8" >
        <label >Contribuinte: </label>
        <input class="form-control"  name="contribuinte" value="{{old('contribuinte')}}"/>
      </div>
      <div class="form-group col-md-4" >
        <label >Cond: </label>
        <input class="form-control"  name="cond" value="{{old('cond')}}"/>
      </div>
    </div>

    <div class="row">
	  <div class="form-group col-md-8" >
        <label >Culturas: </label>
        <input class="form-control"  name="culturas" value="{{old('culturas')}}"/>
      </div>
      <div class="form-group col-md-4">
        <label >Área: </label>
        <input class="form-control"  name="area" value="{{old('area')}}"/>
      </div>
    </div>

    <div class="row">
	  <div class="form-group col-md-6" >
        <label >Insc. Estadual: </label>
        <input class="form-control"  name="inscEstadual" value="{{old('inscEstadual')}}"/>
      </div>
      <div class="form-group col-md-6" >
        <label >CPF: </label>
        <input class="form-control"  name="cpf" value="{{old('cpf')}}"/>
      </div>
    </div>
    <div class="form-group" >
      <label >Endereço: </label>
      <input class="form-control"  name="endereco" value="{{old('endereco')}}"/>
    </div>
    <div class="row">
	  <div class="form-group col-md-6" >
        <label >Nº INCRA: </label>
        <input class="form-control"  name="nINCRA" value="{{old('nINCRA')}}"/>
      </div>
      <div class="form-group col-md-6" >
        <label >Venc. Contrato: </label>
        <input class="form-control"  name="vencContrato" value="{{old('vencContrato')}}"/>
      </div>
    </div>

    <div class="row">
	  <div class="form-group col-md-6" >
        <label >NIRF: </label>
        <input class="form-control"  name="nirf" value="{{old('nirf')}}"/>
      </div>
      <div class="form-group col-md-6" >
        <label >Telefone: </label>
        <input class="form-control"  name="telefone" value="{{old('telefone')}}"/>
      </div>
    </div>
    <div class="form-group" >
      <label >Ponto Ref.: </label>
      <input class="form-control"  name="pontoReferencia" value="{{old('pontoReferencia')}}"/>
    </div>

</div>




</div>
@endsection