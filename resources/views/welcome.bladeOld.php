<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema NAC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .content img {
                width:  100px;
                height: 100px;
                border-style: solid;
                border: 10px;

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .subtitle {
                font-size: 20px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif


            <div class="content">
                <div class="title m-b-md">
                    NAC
                </div>
                <div>
                    Núcleo de Atendimento ao Contribuinte 
                </div>
                <div class="panel-body" border="1">
                    <div class="row">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <a href="{{url('fichas')}}">
                            <img src="icones/FPR-icon.png" alt="Ficha Produtor Rural"/>
                            <div class="caption">
                              <h3>Ficha Produtor Rural</h3>
                            </div>
                        </a>
                       </div>
                      </div>

                    </div>
                     <div class="row">
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                           <a href="{{url('#')}}">
                            <img src="icones/Info-icon.png" alt="Informação de Sistema"/>
                            <div class="caption">
                              <h3>Informações do Sistema</h3>
                            </div>
                           </a>
                          </div>
                        </div>

                    </div>
               </div>
            </div>
         </div>
    </body>
</html>
