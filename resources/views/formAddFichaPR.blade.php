@extends('layout.app')
@section('content')
<div class="container">

	<h1 class="title"> 
		Nova Ficha Produtor Rural
    <a class="add" href="{{url('fichaProdRural')}}" >
           <i class="fa fa-backward" aria-hidden="true" title="Voltar página"></i>
        </a>
	</h1>
  @if (isset($errors) && count($errors) > 0)
     <div class="alert alert-danger">
       @foreach ($errors->all() as $error)
          <ul>
            <li>{{ $error }}</li>
          </ul>
       @endforeach
     </div>
  @endif

    <form method="post" action="addFichaPR">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="row">
       <div class="form-group col-md-6" >
        <label class="form-check-inline">
          <input  class="form-check-input" name="ativo" value="sim" type="checkbox" checked="checked" value="{{old('ativo')}}"/> 
          Ativo
        </label>
      </div>
      <div class="form-group col-md-6" >
        <label >Identidade: </label>
        <input class="form-control"  name="identidade" value="{{old('identidade')}}"/>
      </div>
    </div>
    <div class="row">
	  <div class="form-group col-md-8" >
        <label >Contribuinte: </label>
        <input class="form-control"  name="contribuinte" value="{{old('contribuinte')}}"/>
      </div>
      <div class="form-group col-md-4" >
        <label >Cond: </label>
        <select class="form-control"  name="cond" value="{{old('cond')}}">
           <option value="0"></option>
           <option value="1">Proprietário</option>
           <option value="2">Condômino</option>
           <option value="3">Arrendatário</option>
           <option value="4">Usufrutuário</option>
           <option value="5">Parceiro</option>
           <option value="6">Comodatário</option>
           <option value="7">Pescador</option>
           <option value="8">Posseiro</option>
           <option value="9">NV Proprietário</option>
           <option value="10">Mutuário</option>
           <option value="11">Quilombola</option>
           <option value="12">Co-proprietário</option>
           <option value="13">Informação desconhecida</option>
        </select>
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
    <div class="form-group" >
      <label >Notas Entregue: </label>
      <input class="form-control"  name="notasEntregue" value="{{old('notasEntregue')}}"/>
    </div>
 
    <!-- <div class="form-group">
       <label >Referências das notas: </label>
      <table id="products-table" class="table table-hover table-bordered">
        <tbody>
        <tr>
           <th>Data</th>
           <th>Numeração</th>
           <th>Quant.</th>
           <th>Aut. Nº</th>
           <th class="actions">Ação</th>
        </tr>
        <tr>
         <td>
           <div class="form-group ">
             <input class="form-control" size="16" type="text" name="date" id="date" placeholder="dd/mm/yyyy" value="{{old('date')}}"/>
           </div>
         </td>
         <td>
           <input class="form-control"  name="numercao" value="{{old('numeracao')}}"/>
         </td>
         <td>
           <input class="form-control"  name="quantidade" value="{{old('quantidade')}}"/>
         </td>
         <td>
           <input class="form-control"  name="autN" value="{{old('autN')}}"/>
         </td>
         <td class="actions"> <button class="btn btn-large btn-danger" onclick="RemoveTableRow(this)" type="button">Remover</button></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td colspan="6">
            <button class="btn btn-small btn-success" onclick="AddTableRow(this)" type="button">Adicionar</button>
            </td>
        </tr>
        </tfoot>
      </table>
    </div> -->
    <button class="btn btn-primary">Cadastrar</button>
  </form>
</div>
@endsection