@extends('layout.app')
@section('content')
<div class="container">
	<div class="actions">
		<div class="container">
			<form class="form-search form form-inline" method="post" action="pesquisando">
				<input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<input type="submit" name="bpesquisar" value="Encontrar" class="btn btn-success">
			</form>
		</div>
	</div>

	<div class="clear"></div>

	<h1 class="title"> 
		Listagem dos Produtores 
		<a class="add" href="formAddFichaPR">
		    <i class="fa fa-plus-circle"></i>
		</a>
	</h1>

	<table class="table table-hover">
	  <tr>
	  	<th>Inscrição</th>
	  	<th>Produtor</th>
	  	<th width="100px">Ações</th>
	  </tr>
	  @forelse($fichas as $fichaPR)
	    <tr>
	  	  <td>{{$fichaPR->inscEstadual}}</td>
	  	  <td>{{$fichaPR->contribuinte}}</td>
	  	  <td>
	  	  	<a href="{{url("$fichaPR->id/view")}}" class="view">
	  			<i class="fa fa-eye"></i>
	  		</a>
	  		<a href="{{url("$fichaPR->id/edit")}}" class="edit">
	  			<i class="fa fa-pencil-square-o"></i>
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