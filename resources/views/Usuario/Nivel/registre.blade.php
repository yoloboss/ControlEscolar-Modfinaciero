@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')

@section('content')
<div class="wrapper">
  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
    </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">Vista de Niveles</h1>
        <div class="text-center">
      </div>
      </div>
    </div>
  </div>
  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Registro de Niveles</h2>
          <div class="card card-nav-tabs card-plain">
          <div class="card-header card-header-danger">
        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
              <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                  <ul class="nav nav-tabs" data-tabs="tabs">
                      <li class="nav-item">
                          <a class="nav-link active" href="#datos_g" data-toggle="tab">Datos Generales</a>
                      </li>
                  </ul>
              </div>
            </div>
          </div>
        <div class="card-body ">
          <div class="tab-content text-center">
              <div class="form-group">
                <label for="exampleFormControlInput1">Nivel escolar</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Primaria">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Grado</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Grupo</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Turno</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>T.M</option>
                    <option>T.V</option>
                  </select>
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
@endsection