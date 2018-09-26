@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')

@section('content')
<div class="wrapper">
  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
    </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">Vista de ciclos escolares</h1>
        <div class="text-center">
      </div>
      </div>
    </div>
  </div>
  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Registro de ciclo</h2>
           <form method="post" action="{{ url('/Usuario/ciclo_escolar/'.$cycle->id.'/edicion')}}">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Nombre del ciclo escolar</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2018-2019" name="ciclo" value="{{$cycle->ciclo}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Estatus del ciclo</label>
              <select class="form-control" id="exampleFormControlSelect1" name="status">
                <option>Activo</option>
                <option>Inactico</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection