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
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Registro de alumnos</h2>
          <form method="post" action{{ url('/Usuario/alumno/resgistrar')}}>
            @csrf
            <div class="card card-nav-tabs card-plain">
              <div class="card-header card-header-danger">
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
                        <input type="text" name="nombre"  class="form-control" id="inputNombre" placeholder="Nombre...">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido Paterno</label>
                        <input type="text" name="apellido_P" class="form-control" id="inputApep" placeholder="Apellido Paterno">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido Materno</label>
                        <input type="text" name="apellido_M" class="form-control" id="inputApem" placeholder="Apellido Materno">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Genero</label>
                        <select class="form-control" name="genero" id="exampleFormControlSelect1">
                          <option>Masculino</option>
                          <option>Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Fecha nacimiento</label>
                      <input type="text" name="fecha_nacimineto" class="form-control" id="inputAddress2" placeholder="dd/mm/yy">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">estado</label>
                        <input type="text" name="estado" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Nacionalidad</label>
                        <select id="inputState" name="Nacionalidad" class="form-control">
                        <option selected>Mexicana</option>
                        <option>Otra</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Telefono</label>
                        <input type="text" name="telefono" class="form-control" id="inputZip">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Estatus</label>
                        <select id="inputState" name="baja" class="form-control">
                        <option selected>1</option>
                        <option>0</option>
                        </select>
                      </div>
                    </div>
              </div>
              <div class="tab-pane" id="updates">
                  <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="inputEmail4">Direccion</label>
                        <input type="text" name="direccion" class="form-control" id="inputNombre" placeholder="Direccion...">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">Colonia</label>
                      <input type="text" name="colonia" class="form-control" id="inputApep" placeholder="Colonia...">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Codigo Postal</label>
                      <input type="text" name="c_p" class="form-control" id="inputPassword4" placeholder="C.P...">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Numero de casa</label>
                      <input type="text" name="numre_casa" class="form-control" id="inputPassword4" placeholder="# casa">
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
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre Padre</label>
                        <input type="text" name="nombre_p" class="form-control" id="inputNombre" placeholder="Nombre...">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellidos Padre</label>
                        <input type="text" name="apellidos_P" class="form-control" id="inputApep" placeholder="Apellido Paterno">
                      </div>
                      <div class="form-group col-md-8">
                      <label for="inputEmail4">Direccion Padre</label>
                        <input type="text" name="direccion_p" class="form-control" id="inputNombre" placeholder="Direccion...">
                      </div>
                      <div class="form-group col-md-8">
                      <label for="inputEmail4">Telefono celular Padre</label>
                        <input type="text" name="Telefono_p" class="form-control" id="inputNombre" placeholder="Telefono celular...">
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre Madre</label>
                        <input type="text" name="nombre_m" class="form-control" id="inputNombre" placeholder="Nombre...">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellidos Madre</label>
                        <input type="text" name="apellidos_m" class="form-control" id="inputApep" placeholder="Apellido Paterno">
                      </div>
                      <div class="form-group col-md-8">
                      <label for="inputEmail4">Direccion Madre</label>
                        <input type="text" name="direccion_m" class="form-control" id="inputNombre" placeholder="Direccion...">
                      </div>
                      <div class="form-group col-md-8">
                      <label for="inputEmail4">Telefono celular Madre</label>
                        <input type="text" name="Telefono_m" class="form-control" id="inputNombre" placeholder="Telefono celular...">
                      </div>
                    </div>
              </div>
              <div class="tab-pane" id="nivel">
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                      <div class="fileinput-new thumbnail img-raised">
                        <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
                      </div>
                      <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                      <div>
                        <span class="btn btn-raised btn-round btn-default btn-file">
                            <span class="fileinput-new">Imagen de Alumno</span>
                            <span class="fileinput-exists">cambiar</span>
                            <input type="file" name="..." />
                        </span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                      </div>
                    </div>
                    @php
                    $levels=App\level::all();
                    @endphp
                    <div class="form-group col-md-4">
                        <label for="inputState">nivel educativo</label>
                        <select id="inputState" name="level_id" class="form-control">
                        @foreach($levels as $level)
                        <option value="{{$level->id}}">{{$level->nivel_educativo}}</option>
                        @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
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