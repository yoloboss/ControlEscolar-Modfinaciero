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
              <div class="text-right">
                <a href="{{ url('/Usuario/alumno/')}}" type="button" class="btn btn-secondary now-ui-icons arrows-1_minimal-left">&nbsp;Regresar</a>
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
                    <div class="col-8">
                      <div class="form-group col-8">
                        <label for="nombre">Nombre(s)</label>
                        <input type="text" name="nombre"  class="form-control" id="inputNombre" value="{{old('nombre')}}">
                      </div>
                      <div class="form-group col-8">
                        <label for="inputPassword4">Apellido Paterno</label>
                        <input type="text" name="apellido_P" class="form-control" id="inputApep" value="{{old('apellido_P')}}">
                      </div>
                      <div class="form-group col-8">
                        <label for="inputPassword4">Apellido Materno</label>
                        <input type="text" name="apellido_M" class="form-control" id="inputApem" value="{{old('apellido_M')}}">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-4">
                          <label for="exampleFormControlSelect1">Género</label>
                            <select class="form-control" name="genero" id="exampleFormControlSelect1" value="{{old('genero')}}">
                              <option>Masculino</option>
                              <option>Femenino</option>
                            </select>
                        </div>
                        <div class="form-group col-4">
                          <label for="inputAddress2">Fecha de nacimiento</label>
                          <input type="text" name="fecha_nacimineto" class="form-control date-picker" placeholder="AAAA/MM/DD"  data-datepicker-color="primary" value="{{old('fecha_nacimineto')}}">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-4">
                          <label for="inputCity">Estado</label>
                          <input type="text" name="estado" class="form-control" id="inputCity" value="{{old('estado')}}">
                        </div>
                        <div class="form-group col-4">
                          <label for="inputState">Nacionalidad</label>
                          <select id="inputState" name="Nacionalidad" class="form-control" value="{{old('Nacionalidad')}}">
                          <option selected>Mexicana</option>
                          <option>Otra</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-4">
                          <label for="inputZip">Teléfono</label>
                          <input type="text" name="telefono" class="form-control" id="inputZip" value="{{old('telefono')}}">
                        </div>
                        <div class="form-group col-4">
                          <label for="inputState">Estatus</label>
                          <select id="inputState" name="baja" class="form-control" value="{{old('baja')}}">
                          <option selected>Alta</option>
                          <option>Baja</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                          <label>Fotografía del alumno</label>
                          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                              <div class="fileinput-new thumbnail img-raised">
                              <img src="{{asset('http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png')}}" alt="Imagen de usuario">
                              </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                              <span class="btn btn-raised btn-round btn-default btn-file">
                                <span class="fileinput-new">Seleccionar imagen</span>
                                <span class="fileinput-exists">Cambiar</span>
                                <input type="file" name="imagen"/>
                              </span>
                              <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Quitar</a>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="tab-pane text-center" id="updates">
                <div class="row">
                    <div class="col-4 offset-2">
                      <div class="form-group">
                        <label for="inputEmail4">Calles</label>
                          <input type="text" name="direccion" class="form-control" id="inputNombre" value="{{old('direccion')}}">
                      </div>
                      <div class="form-group">
                        <label for="inputPassword4">Colonia</label>
                        <input type="text" name="colonia" class="form-control" id="inputApep" value="{{old('colonia')}}">
                      </div>
                      <div class="form-group">
                        <label for="inputPassword4">Código Postal</label>
                        <input type="text" name="c_p" class="form-control" id="inputPassword4" value="{{old('c_p')}}">
                      </div>
                      <div class="form-group">
                        <label for="inputPassword4">Teléfono de casa</label>
                        <input type="text" name="numre_casa" class="form-control" id="inputPassword4" value="{{old('numre_casa')}}">
                      </div>
                      <div class="form-group">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">Ambos padres viven con el hijo
                              <span class="form-check-sign">
                              <span class="check"></span>
                          </span>
                          </label>
                        </div>
                      </div>
                    </div>
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