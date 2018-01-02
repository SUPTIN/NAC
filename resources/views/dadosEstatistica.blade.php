@extends('layout.app')
@section('content')
<div class="container">
	<h1 class="title"> 
		Dados Estastísticos
    <a class="add" href="{{url('/')}}" >
        <i class="fa fa-backward" aria-hidden="true" title="Voltar página"></i>
    </a>
	</h1> 
  <div class="row">
    <div class="col-sm-4">
      <table class="table table-hover">
         <tr>
           <th>Tipo Ficha</th>
           <th>Quant. Ficha</th>
         </tr> 
         <tr>
            <td>Proprietário</td>
            <td align="center">{{$dados['Proprietário']}}</td>
         </tr>
         <tr>
            <td>Condômino</td>
            <td align="center">{{$dados['Condômino']}}</td>
         </tr>
            <td>Arrendatário</td>
            <td align="center">{{$dados['Arrendatário']}}</td>
        </tr>
        <tr>
            <td>Usufrutuário</td>
            <td align="center">{{$dados['Usufrutuário']}}</td>
        </tr>
        <tr>    
            <td>Parceiro</td>
            <td align="center">{{$dados['Parceiro']}}</td>
        </tr>
        <tr>    
            <td>Comodatário</td>
            <td align="center">{{$dados['Comodatário']}}</td>
        </tr>
        <tr>    
            <td>Pescador</td>
            <td align="center">{{$dados['Pescador']}}</td>
        </tr>
        <tr>    
            <td>Posseiro</td>
            <td align="center">{{$dados['Posseiro']}}</td>
        </tr>
        <tr>    
            <td>Mutuário</td>
            <td align="center">{{$dados['Mutuário']}}</td>
        </tr>
        <tr>    
            <td>Quilombola</td>
            <td align="center">{{$dados['Quilombola']}}</td>
        </tr>
        <tr>    
            <td>Co-proprietário</td>
            <td align="center">{{$dados['Co-proprietário']}}</td>
        </tr>
        <tr>    
            <td>Informação desconhecida</td>
            <td align="center">{{$dados['Informação desconhecida']}}</td>
        </tr>
        <tr>    
            <td><b>Total de Fichas</b></td>
            <td align="center"><b>{{$dados['totalFichaPR']}}</b></td>
        </tr>
      </table>
    </div>
    <div class="col-sm-8">
      <table class="table table-hover">
         <tr>
            <td>

              <script class="code" type="text/javascript">
                $(document).ready(function(){
                  jQuery.jqplot.config.enablePlugins = true;
                  plot7 = jQuery.jqplot('cond',
                    [[['Proprietário',{{$dados['Proprietário']}}], 
                      ['Condômino',{{$dados['Condômino']}}],
                      ['Arrendatário',{{$dados['Arrendatário']}}],
                      ['Usufrutuário',{{$dados['Usufrutuário']}}],
                      ['Parceiro',{{$dados['Parceiro']}}],
                      ['Comodatário',{{$dados['Comodatário']}}],
                      ['Pescador',{{$dados['Pescador']}}],
                      ['Posseiro',{{$dados['Posseiro']}}],
                      ['Mutuário',{{$dados['Mutuário']}}],
                      ['Quilombola',{{$dados['Quilombola']}}],
                      ['Co-proprietário',{{$dados['Co-proprietário']}}],
                      ['Informação desconhecida',{{$dados['Informação desconhecida']}}]]],
                    {
                      title: 'Gráfico por Cond.',
                      seriesDefaults: { shadow: true,
                                        renderer: jQuery.jqplot.PieRenderer,
                                        rendererOptions: { showDataLabels :true}
                                      },
                      legend: {show: true}
                    }
                    );
                });                
              </script>
              <div id="cond" style="height:400px; width:600px;"></div>              
            </td>
         </tr>
      </table>
    </div>
  </div>

</div>
@endsection