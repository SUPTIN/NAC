@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ferramentas | Funcionário: 
                </div>

                <div class="panel-body">

                    <div class="row">

                      <div class="col-sm-5 col-md-3">
                        <div class="thumbnail">
                          <a href="{{url('fichaProdRural')}}">
                            <img src="icones/FPR-icon.png" alt="Ficha Produtor Rural"/>
                            <div class="caption">
                              <h4>Ficha Produtor Rural</h4>
                            </div>
                        </a>
                       </div>
                      </div>

                      <div class="col-sm-5 col-md-3">
                        <div class="thumbnail">
                          <a href="{{url('dadosEstatisticos')}}">
                            <img src="icones/estatistica.png" alt="Dados estatísticos"/>
                            <div class="caption">
                              <h4>Dados Estatísticos</h4>
                            </div>
                        </a>
                       </div>
                      </div>

                      <div class="col-sm-5 col-md-3">
                        <div class="thumbnail">
                          <a href="{{url('#')}}">
                            <img src="icones/Info-icon.png" alt="icone de usuário"/>
                            <div class="caption">
                              <h4>Informações do Sistema</h4>
                            </div>
                        </a>
                       </div>
                      </div>

                    </div>


                    <div class="row">
                      <!-- <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <a href="{{url('#')}}">
                            <img src="icones/Info-icon.png" alt="icone de usuário"/>
                            <div class="caption">
                              <h3>Informações do Sistema</h3>
                            </div>
                        </a>
                       </div>
                      </div>
                    </div> -->

                  </div>

           </div>
      </div>
   </div>
</div>

@endsection
