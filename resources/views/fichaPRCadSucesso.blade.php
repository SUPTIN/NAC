@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Produtor Rural cadastrado com sucesso
	</h1> 
    <div class="row">
        <div class="form-group col-md-8" >
            <label >Ativo:  </label>{{$dados->ativo}}
        </div>
    </div>
    <div class="row">
	  <div class="form-group col-md-8" >
        <label >Contribuinte: </label>{{$dados->contribuinte}}
      </div>
      <div class="form-group col-md-4" >
        <label >Cond: </label> {{$dados->textoCond}}
        <input type="hidden" name="nCond" value="{{$dados->cond}}" />
      </div>
    </div>

    <div class="row">
	  <div class="form-group col-md-6" >
        <label >Insc. Estadual: </label> {{$dados->inscEstadual}}
      </div>
      <div class="form-group col-md-6" >
        <label >CPF: </label>{{$dados->cpf}}
      </div>
    </div>
    <div class="form-group" >
      <label >Endereço: </label> {{$dados->endereco}}
    </div>
    <div class="row">
	  <div class="form-group col-md-6" >
        <label >Nº INCRA: </label> {{$dados->nINCRA}}
      </div>
      <div class="form-group col-md-6" >
        <label >Venc. Contrato: </label> {{$dados->vencContrato}}
      </div>
    </div>

    <div class="row">
	  <div class="form-group col-md-6" >
        <label >NIRF: </label> {{$dados->nirf}}
      </div>
      <div class="form-group col-md-6" >
        <label >Telefone: </label> {{$dados->telefone}}
      </div>
    </div>
    <div class="form-group" >
      <label >Ponto Ref.: </label> {{$dados->pontoReferencia}}
    </div>
    <div class="form-group" >
      <label >Notas Entregue: </label> {{$dados->notasEntregue}}
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

  </form>



</div>
@endsection