@extends('layout.app')
@section('content')
<div class="container">
	<div class="clear"></div>

	<h1 class="title"> 
		Busca por Nome do Produtor
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