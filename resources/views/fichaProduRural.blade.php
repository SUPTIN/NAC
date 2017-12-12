@extends('layout.app')
@section('content')
<div class="container">
	<div class="actions">
		<div class="container">
			<form class="form-search form form-inline" method="post" action="pesquisando">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				
				<div class="row">
				   <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
				   <input type="submit" name="bpesquisar" value="Encontrar" class="btn btn-success">
				</div>
				<div class="row">
				   <input name="tipoBusca" type="radio" value="produtor"/>   Produtor 
				   <input name="tipoBusca" type="radio" value="inscricao" checked="checked"/>   Inscrição
				</div>
			</form>
		</div>
	</div>

	<div class="clear"></div>

	<h1 class="title"> 
		Listagem dos Produtores 
		<a class="add" href="formAddFichaPR" >
		    <i class="fa fa-plus-circle" aria-hidden="true" title="Adicionar nova Ficha"></i>
		</a>
	</h1>

	<table class="table table-hover">
	  <tr>
	  	<th width="200px">Inscrição</th>
	  	<th>Produtor</th>
	  	<th width="80px">Ativo?</th>
	  	<th width="80px">Ações</th>
	  </tr>
	  @forelse($fichas as $fichaPR)
	    <tr>
	  	  <td>{{$fichaPR->inscEstadual}}</td>
	  	  <td>{{$fichaPR->contribuinte}}</td>
	  	  <td align="center"> 
	  	  	  @if ($fichaPR->ativo == 'sim')   
	  	  	     <i class="fa fa-thumbs-up" arian-hidden="true" title="Ativo SIM" style="color:green"></i>
	  	  	  @else  
	  	  	     <i class="fa fa-thumbs-down" arian-hidden="true" title="Ativo NÃO" style="color:red"></i>            
	  	  	  @endif
	  	  </td>
	  	  <td>
	  	  	<a href="{{url("$fichaPR->id/view")}}" class="view">
	  			<i class="fa fa-eye" title="Visualiza a Ficha"></i>
	  		</a>
	  		<a href="{{url("$fichaPR->id/edit")}}" class="edit">
	  			<i class="fa fa-pencil-square-o" title="Edita a Ficha"></i>
	  		</a>
	  	  </td>
	    </tr>
	  @empty
	    <tr>
	      <td colspan="90">
	      	<p>Nenhum resultado encontrado!</p>
	      </td>
	    </tr>
	  @endforelse
	</table>
	<div align="center">{!! $fichas->links() !!}</div>

</div>
@endsection