@extends('layout.app')
@section('content')
<div class="container">

	<h1 class="title"> 
		Nova Ficha Produtor Rural
    <a class="add" href="{{ URL::previous() }}" >
        <i class="fa fa-backward" aria-hidden="true" title="Voltar página"></i>
    </a>
	</h1>
    <form method="post" action="updateFichaPR">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id" value="{{ $dados->id }}" />
    <div class="row">
        <div class="form-group col-md-8" >
            <label >Ativo:  </label>
            @if ($dados->ativo == 'sim')   
               <i class="fa fa-thumbs-up" arian-hidden="true" title="Ativo SIM" style="color:green"></i>
            @else  
               <i class="fa fa-thumbs-down" arian-hidden="true" title="Ativo NÃO" style="color:red"></i>            
            @endif
        </div>
    </div>
    <div class="row">
	  <div class="form-group col-md-8" >
        <label >Contribuinte: </label>
        <input class="form-control"  name="contribuinte" value="{{$dados->contribuinte}}"/>
      </div>
      <div class="form-group col-md-4" >
        <label >Cond: </label>
        <select class="form-control"  name="cond">
           <option value={{($dados->cond) == "1"? 'selected':''}}>{{$dados->textoCond}}</option>
           <option value={{($dados->cond) == "2"? 'selected':''}}>Condômino</option>
           <option value={{($dados->cond) == "3"? 'selected':''}}>Arrendatário</option>
           <option value={{($dados->cond) == "4"? 'selected':''}}>Usufrutuário</option>
           <option value={{($dados->cond) == "5"? 'selected':''}}>Parceiro</option>
           <option value={{($dados->cond) == "6"? 'selected':''}}>Comodatário</option>
           <option value={{($dados->cond) == "7"? 'selected':''}}>Pescador</option>
           <option value={{($dados->cond) == "8"? 'selected':''}}>Posseiro</option>
           <option value={{($dados->cond) == "9"? 'selected':''}}>NV Proprietário</option>
           <option value={{($dados->cond) == "10"? 'selected':''}}>Mutuário</option>
           <option value={{($dados->cond) == "11"? 'selected':''}}>Quilombola</option>
           <option value={{($dados->cond) == "12"? 'selected':''}}>Co-proprietário</option>
        </select>
      </div>
    </div>

    <div class="row">
	  <div class="form-group col-md-6" >
        <label >Insc. Estadual: </label>
        <input class="form-control"  name="inscEstadual" value="{{$dados->inscEstadual}}"/>
      </div>
      <div class="form-group col-md-6" >
        <label >CPF: </label>
        <input class="form-control"  name="cpf" value="{{$dados->cpf}}"/>
      </div>
    </div>
    <div class="form-group" >
      <label >Endereço: </label>
      <input class="form-control"  name="endereco" value="{{$dados->endereco}}"/>
    </div>
    <div class="row">
	  <div class="form-group col-md-6" >
        <label >Nº INCRA: </label>
        <input class="form-control"  name="nINCRA" value="{{$dados->nINCRA}}"/>
      </div>
      <div class="form-group col-md-6" >
        <label >Venc. Contrato: </label>
        <input class="form-control"  name="vencContrato" value="{{$dados->vencContrato}}"/>
      </div>
    </div>

    <div class="row">
	  <div class="form-group col-md-6" >
        <label >NIRF: </label>
        <input class="form-control"  name="nirf" value="{{$dados->nirf}}"/>
      </div>
      <div class="form-group col-md-6" >
        <label >Telefone: </label>
        <input class="form-control"  name="telefone" value="{{$dados->telefone}}"/>
      </div>
    </div>
    <div class="form-group" >
      <label >Ponto Ref.: </label>
      <input class="form-control"  name="pontoReferencia" value="{{$dados->pontoReferencia}}"/>
    </div>
    <div class="form-group" >
      <label >Notas Entregue: </label>
      <input class="form-control"  name="notasEntregue" value="{{$dados->notasEntregue}}"/>
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
    <button class="btn btn-primary">Atualizar</button>
  </form>
</div>
@endsection