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
          <div class="card card-nav-tabs card-plain">
          <div class="card-header card-header-danger">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
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
                  </ul>
              </div>
            </div>
          </div>
        <div class="card-body ">
          <div class="tab-content text-center">
              <div class="tab-pane active" id="datos_g">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre</label>
                        <input type="email" class="form-control" id="inputNombre" placeholder="Nombre...">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido Paterno</label>
                        <input type="password" class="form-control" id="inputApep" placeholder="Apellido Paterno">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido Materno</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Apellido Materno">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress">Sexo</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Fecha nacimiento</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputCity">estado</label>
                        <input type="text" class="form-control" id="inputCity">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Nacionalidad</label>
                        <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label for="inputZip">Telefono</label>
                        <input type="text" class="form-control" id="inputZip">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Estatus</label>
                        <select id="inputState" class="form-control">
                        <option selected>Alta</option>
                        <option>Baja</option>
                        </select>
                      </div>
                    </div>
              </div>
              <div class="tab-pane" id="updates">
                  <div class="form-row">
                    <div class="form-group col-md-8">
                      <label for="inputEmail4">Direccion</label>
                        <input type="email" class="form-control" id="inputNombre" placeholder="Direccion...">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputPassword4">Colonia</label>
                      <input type="password" class="form-control" id="inputApep" placeholder="Colonia...">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Codigo Postal</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="C.P...">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Numero de casa</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="# casa">
                   </div>
                  </div>
              </div>
              <div class="tab-pane" id="history">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre Padre</label>
                        <input type="email" class="form-control" id="inputNombre" placeholder="Nombre...">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido Paterno Padre</label>
                        <input type="password" class="form-control" id="inputApep" placeholder="Apellido Paterno">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido Materno padre</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Apellido Materno">
                      </div>
                      <div class="form-group col-md-8">
                      <label for="inputEmail4">Direccion</label>
                        <input type="email" class="form-control" id="inputNombre" placeholder="Direccion...">
                      </div>
                    </div>
                    <br>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre Madre</label>
                        <input type="email" class="form-control" id="inputNombre" placeholder="Nombre...">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido Paterno Madre</label>
                        <input type="password" class="form-control" id="inputApep" placeholder="Apellido Paterno">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Apellido Materno Madre</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Apellido Materno">
                      </div>
                      <div class="form-group col-md-8">
                      <label for="inputEmail4">Direccion</label>
                        <input type="email" class="form-control" id="inputNombre" placeholder="Direccion...">
                      </div>
                    </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
          </div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection