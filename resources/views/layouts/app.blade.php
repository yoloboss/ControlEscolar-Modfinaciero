<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Finaciero
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Montserrat:400,700,200')}}" rel="stylesheet" />
  <link href="{{asset('https://use.fontawesome.com/releases/v5.0.6/css/all.css"')}} rel="stylesheet">
  <link rel="stylesheet" href="{{asset('/iconos/svgs"')}}">
  <!-- CSS Files -->
  <link href="{{asset('/css/steps.css')}}" rel="stylesheet" />
  <link href="{{asset('/css/bootstrap-multiselect.css')}}" rel="stylesheet" />
  <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('/css/now-ui-kit.css?v=1.2.0')}}" rel="stylesheet" />

</head>
<body class="@yield('body-class')">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-primary " >
    <div class="container">
      <!--
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Opciones</a>
          <a class="dropdown-item" href="{{ url('/Usuario/alumno/')}}">Alumnos</a>
          <a class="dropdown-item" href="{{ url('/Usuario/Nivel/')}}">Niveles educativos</a>
          <a class="dropdown-item" href="{{ url('/Usuario/ciclo_escolar')}}">Ciclos Escolares</a>
          <a class="dropdown-item" href="{{ url('/Usuario/concepto_pago/')}}">Conceptos de Pago</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">One more separated link</a>
        </div>
      </div>
       -->
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('welcome')}}" rel="tooltip"  data-placement="bottom" >
          Servicios Financieros
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{asset('/img/blurred-image-1.jpg')}}">
        <ul class="navbar-nav">
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
        </li>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Cerrar sesión') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">

          @yield('content')

  </div>
  <script type="text/javascript">
    
  </script>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Fechas de pago</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>


          <div id="pagos" class="modal-body">
            <h5>Ingresar fechas</h5>

              
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
          </div>
      </div>
  </div>


</div>
  <!--   Core JS Files   -->
  <script src="{{asset('/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/js/steps.js')}}" type="text/javascript"></script>
  <script src="{{asset('/js/bootstrap-multiselect.js')}}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{asset('/js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{asset('/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('/js/now-ui-kit.js?v=1.2.0')}}" type="text/javascript"></script>

     @stack('scripts')

</body>

</html>