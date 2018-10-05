@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')

@section('content')
<div class="wrapper">
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
  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ml-auto mr-auto text-center">
          <h2 class="title">Registro de alumnos</h2>
          @if($errors->any())
            <div class="alert alert-danger" role="alert">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form method="post" action{{ url('/Usuario/alumno/resgistrar')}} enctype="multipart/form-data">
            @csrf
            <div class="card card-nav-tabs card-plain">
              <div class="card-header card-header-danger">
              <div class="text-left">
                <a href="{{ url('/Usuario/alumno/')}}" type="button" class="btn btn-primary now-ui-icons arrows-1_minimal-left">&nbsp;Regresar</a>
              </div>
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#datos_g" data-toggle="tab">Datos Generales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#updates" data-toggle="tab">Direccion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#history" data-toggle="tab">Datos Padres</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nivel" data-toggle="tab">Nivel educativo</a>
                        </li>
                    </ul>
                  </div>
                </div>
            </div>
            <div class="card-body ">
              <div class="tab-content text-center">
                <div class="tab-pane active" id="datos_g">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre"  class="form-control" id="inputNombre" value="{{old('nombre')}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido Paterno</label>
                        <input type="text" name="apellido_P" class="form-control" id="inputApep" value="{{old('apellido_P')}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido Materno</label>
                        <input type="text" name="apellido_M" class="form-control" id="inputApem" value="{{old('apellido_M')}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Género</label>
                        <select class="form-control" name="genero" id="exampleFormControlSelect1" value="{{old('genero')}}">
                          <option>Masculino</option>
                          <option>Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Fecha de nacimiento</label>
                      <input type="text" name="fecha_nacimineto" class="form-control" id="inputAddress2" placeholder="AAAA/MM/DD" value="{{old('fecha_nacimineto')}}">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">Estado</label>
                        <input type="text" name="estado" class="form-control" id="inputCity" value="{{old('estado')}}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Nacionalidad</label>
                        <select id="inputState" name="Nacionalidad" class="form-control" value="{{old('Nacionalidad')}}">
                        <option selected>Mexicana</option>
                        <option>Otra</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Teléfono</label>
                        <input type="text" name="telefono" class="form-control" id="inputZip" value="{{old('telefono')}}">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Estatus</label>
                        <select id="inputState" name="baja" class="form-control" value="{{old('baja')}}">
                        <option selected>Alta</option>
                        <option>Baja</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                            <img src="{{asset('http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png')}}" alt="...">
                            </div>
                          <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                          <div>
                            <span class="btn btn-raised btn-round btn-default btn-file">
                              <span class="fileinput-new">Imagen de Alumno</span>
                              <span class="fileinput-exists">cambiar</span>
                              <input type="file" name="imagen" />
                            </span>
                            <a href="" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="tab-pane" id="updates">
                  <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="inputEmail4">Direccion</label>
                        <input type="text" name="direccion" class="form-control" id="inputNombre" value="{{old('direccion')}}">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">Colonia</label>
                      <input type="text" name="colonia" class="form-control" id="inputApep" value="{{old('colonia')}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Código Postal</label>
                      <input type="text" name="c_p" class="form-control" id="inputPassword4" value="{{old('c_p')}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Número de casa</label>
                      <input type="text" name="numre_casa" class="form-control" id="inputPassword4" value="{{old('numre_casa')}}">
                   </div>
                     <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox"> Los padres viven con el hijo
                            <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                        </label>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="tab-pane" id="history">
                    <div class="form-row">
                      <div class="col-md-12 ml-auto mr-auto text-left">
                       <span class="badge badge-info h5">Datos del padre</span>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre</label>
                        <input type="text" name="nombre_p" class="form-control" id="inputNombre" value="{{old('nombre_p')}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellidos</label>
                        <input type="text" name="apellidos_P" class="form-control" id="inputApep" value="{{old('apellidos_P')}}">
                      </div>
                      <div class="form-group col-md-8">
                      <label for="inputEmail4">Dirección</label>
                        <input type="text" name="direccion_p" class="form-control" id="inputNombre" value="{{old('direccion_p')}}">
                      </div>
                      <div class="form-group col-md-8">
                      <label for="inputEmail4">Teléfono celular</label>
                        <input type="text" name="Telefono_p" class="form-control" id="inputNombre" value="{{old('Telefono_p')}}">
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="col-md-12 ml-auto mr-auto text-left">
                       <span class="badge badge-info h5 ">Datos de la madre</span>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre</label>
                        <input type="text" name="nombre_m" class="form-control" id="inputNombre" value="{{old('nombre_m')}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellidos</label>
                        <input type="text" name="apellidos_m" class="form-control" id="inputApep" value="{{old('apellidos_m')}}">
                      </div>
                      <div class="form-group col-md-8">
                      <label for="inputEmail4">Dirección</label>
                        <input type="text" name="direccion_m" class="form-control" id="inputNombre" value="{{old('direccion_m')}}">
                      </div>
                      <div class="form-group col-md-8">
                      <label for="inputEmail4">Teléfono celular</label>
                        <input type="text" name="Telefono_m" class="form-control" id="inputNombre" value="{{old('Telefono_m')}}">
                      </div>
                    </div>
              </div>
              <div class="tab-pane" id="nivel">
                    @php
                    $actlevels=App\Actlevel::all();
                    @endphp
                    <div class="form-inline col-md-12">
                      <form method="post" action="/Usuario/alumno/busqueda" class="form-inline  col-md-16 ml-auto mr-auto text-left">
                     {{csrf_field()}}
                        @php
                        $levels=App\level::all();
                        $groups=App\group::all();
                        $grades=App\grade::all();
                        @endphp
                        <div class="form-group col-md-3">
                          <label for="exampleFormControlSelect1">Nivel educativo</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="nivel">
                            <option value="">seleccione una Opciones</option>
                            @foreach($levels as $level)
                            <option value="{{$level->id}}">{{$level->nivel_educativo}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="exampleFormControlSelect1">grado</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="grado">
                            <option value="">seleccione una Opciones</option>
                            @foreach($grades as $grade)
                            <option value="{{$grade->id}}">{{$grade->grado}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="exampleFormControlSelect1">grupo</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="grupo">
                            <option value="">seleccione una Opciones</option>
                            @foreach($groups as $group)
                            <option value="{{$group->id}}">{{$group->grupo}}</option>
                            @endforeach
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary">buscar</button>
                      </form>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputState">Nivel educativo</label>
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="text-center">ID</th>
                              <th class="text-center">Nombre del nivel</th>
                              <th class="text-center">Grado</th>
                              <th class="text-center">Grupo</th>
                              <th class="text-center">Opciones</th>
                             </tr>
                          </thead>
                        <tbody>
                        @foreach($actlevels as $actlevel)
                        <tr>
                          <td class="text-center">{{ $actlevel->id}}</td>
                          <td>{{ $actlevel->level->nivel_educativo}} </td>
                          <td>{{ $actlevel->grade->grado ? $actlevel->grade->grado :'sin grado' }}</td>
                          <td>{{ $actlevel->group->grupo ? $actlevel->group->grupo :'sin grupo'}}</td>
                          <td class="td-actions text-right">
                            <input class="form-check-input" name="level_id" value="{{$actlevel->id}}" type="radio" >
                            <span class="form-check-sign">
                              <span class="check" ></span>
                            </span>
                            <i class="now-ui-icons ui-2_settings-90"></i>
                        </td>
                    </tr>
                      @endforeach
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Guardar</button>
               
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