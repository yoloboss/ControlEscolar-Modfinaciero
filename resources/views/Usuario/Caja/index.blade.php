@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')

@section('content')
<div class="wrapper">
  <!--
  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
    </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">Vista de alumnos</h1>
        <div class="text-center">
      </div>
      </div>
    </div>
  </div>
  -->
  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="margin-top: 30px;">
          <h3>Caja</h3>
          @if($errors->any())
            <div class="alert alert-danger" role="alert">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div class="text-right">
                <a href="{{ url('/Usuario/alumno/')}}" type="button" class="btn btn-secondary now-ui-icons arrows-1_minimal-left">&nbsp;Regresar</a>
              </div>
          <div class="form-row">
                    {{csrf_field()}}
                      @php
                        $levels=App\level::all();
                        $groups=App\group::all();
                        $grades=App\grade::all();
                      @endphp
                      <div class="form-group col-md-4">
                        <label class="sr-only" for="inputNombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="inputNombre"  placeholder="Nombre">
                      </div>
                      <div class="form-group col-md-3">
                        <label class="sr-only" for="exampleFormControlSelect1">Nivel educativo</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="nivel">
                        <option value="">Nivel educativo</option>
                          @foreach($levels as $level)
                          <option value="{{$level->id}}">{{$level->nivel_educativo}}</option>
                          @endforeach 
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label class="sr-only" for="exampleFormControlSelect1">Grado</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="grado">
                          <option value="">Grado</option>
                          @foreach($grades as $grade)
                          <option value="{{$grade->id}}">{{$grade->grado}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label class="sr-only" for="exampleFormControlSelect1">Grupo</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="grupo">
                          <option value="">Grupo</option>
                          @foreach($groups as $group)
                          <option value="{{$group->id}}">{{$group->grupo}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-1">
                        <button type="submit" class="btn btn-primary now-ui-icons ui-1_zoom-bold"></button>
                      </div>
                    </div>

          <form method="post" action{{ url('/Usuario/alumno/resgistrar')}} enctype="multipart/form-data">
            @csrf
            <div class="card card-nav-tabs card-plain">
              <div class="card-header card-header-danger">
              <div class="text-left">
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Pagar

 
                 </button>
              </div>
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#datos_g" data-toggle="tab">1) Lista de cobros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#updates" data-toggle="tab">2) Lista de alumnos</a>
                        </li>
                    </ul>
                  </div>
                </div>
            </div>
            <div class="card-body ">
              <div class="tab-content text-center">
                <div class="tab-pane active" id="datos_g">
                  <div class="row">
                     <table class="table  table-condensed">
                      <thead>
                        <tr>
                          <th class="text-center">Numero de Pago</th>
                          <th class="text-center"> Alumno</th>
                          <th class="text-center">Grado</th>
                          <th class="text-center">Grupo</th>
                          <th class="text-center">Total</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Status</th>
                          <th class="text-center"></th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane text-center" id="updates">
                <div class="row">
                  <table class="table  table-condensed">
                      <thead>
                        <tr>
                          <th class="text-center">Matricula</th>
                          <th class="text-center">Apellido Paterno</th>
                          <th class="text-center">Apellido Materno</th>
                          <th class="text-center">Nombre</th>
                          <th class="text-center">Grado</th>
                          <th class="text-center">Grupo</th>
                          <th class="text-center">Status</th>
                          <th class="text-center"></th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                </div>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('scripts') 
@endpush