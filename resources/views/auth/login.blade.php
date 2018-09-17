@extends('layouts.app')

@section('body-class','login-page sidebar-collapse')

@section('content')
<div class="page-header-image" style="background-image:url({{asset('/img/login.jpg')}})"></div>
<div class="content">
  <div class="container">
    <div class="col-md-4 ml-auto mr-auto">
      <div class="card card-login card-plain">
        <form class="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
          <div class="card-header text-center">
            <div class="logo-container">
              <img src="{{asset('/img/now-logo.png')}}" alt="">
            </div>
          </div>
          <div class="card-body">
            <div class="input-group no-border input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <!-- ingresar el email del usuario -->
             <input id="email" type="email" placeholder="Email..." class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus  >
                 @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group no-border input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons text_caps-small"></i>
                </span>
              </div>
                <!-- ingresar la contraseña del usuario -->
              <input id="password" type="password" placeholder="Contraseña..." class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Entrar</button>
            <div class="pull-right">
              <h6>
                <!-- CAmbiar la contraseña del usuario -->
               <!-- <a href="#pablo" class="link">Olvidaste la contraseña!</a>-->
                <a class="link" href="{{ route('password.request') }}">
                    {{ __('Olvidaste la contraseña!') }} </a>
              </h6>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <div class="copyright" id="copyright">
      &copy;
      <script>
        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
      </script>, Designed by
      <a href="http://acadep.com/wp/" target="_blank">ACADEP</a>
    </div>
  </div>
</footer>
@endsection
