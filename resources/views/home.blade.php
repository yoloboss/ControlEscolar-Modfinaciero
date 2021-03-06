<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Control Escolar</title>
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
            
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/welcome') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif -->

            <div class="content">
                <div class="title m-b-md" style="color:#636b6f">
                    Sistema de Control Escolar
                </div>
                <div class="links">
                    @auth
                        <a href="{{ url('/Usuario/alumno/')}}">Alumnos</a>
                        <a href="https://laracasts.com">usuarios</a>
                        <a href="https://laravel-news.com">Caja</a>
                        <a href="https://forge.laravel.com">Ciclos escolares</a>
                        <a href="{{ url('/Usuario/Nivel/')}}">Niveles</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>