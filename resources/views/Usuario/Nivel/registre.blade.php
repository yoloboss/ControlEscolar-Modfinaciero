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
              <div class="tab-pane active" id="datos_g">
                  <div class="form-row">
                    <form class="form-horizontal">
                      <fieldset>
                    <!-- Form Name -->
                        <legend>Form Name</legend>

                      <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-8 control-label" for="textinput">Text Input</label>  
                            <div class="col-md-8">
                              <input id="textinput" name="textinput" type="text" placeholder="placeholder" class="form-control input-md">
                              <span class="help-block">help</span>  
                            </div>
                          </div>

                        <!-- Select Basic -->
                          <div class="form-group">
                            <label class="col-md-8 control-label" for="selectbasic">Select Basic</label>
                            <div class="col-md-8">
                              <select id="selectbasic" name="selectbasic" class="form-control">
                              <option value="1">Option one</option>
                              <option value="2">Option two</option>
                              </select>
                            </div>
                          </div>
                        <!-- Select Multiple -->
                          <div class="form-group">
                            <label class="col-md-8 control-label" for="selectmultiple">Select Multiple</label>
                            <div class="col-md-8">
                              <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
                              <option value="1">Option one</option>
                              <option value="2">Option two</option>
                              </select>
                            </div>
                          </div>
                      </fieldset>
                    </form>
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
@endsection