@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')


@section('content')
<div class="wrapper">
  <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
      </div>
      <div class="content-center">
        <div class="container">
            <h1 class="title">Niveles Educativos</h1>
        </div>
      </div>
  </div>
  <div class="section section-about-us">
      <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Lista de Niveles</h2>
              <table class="table">
              <thead>
                  <tr>
                      <th class="text-center">#</th>
                      <th>Name</th>
                      <th>Job Position</th>
                      <th>Since</th>
                      <th class="text-right">Salary</th>
                      <th class="text-right">Actions</th>
                  </tr>
              </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Andrew Mike</td>
                    <td>Develop</td>
                    <td>2013</td>
                    <td class="text-right">&euro; 99,225</td>
                    <td class="td-actions text-right">
                        <button type="button" rel="tooltip" class="btn btn-info">
                            <i class="now-ui-icons users_single-02"></i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-success">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
          </table>
            </div>
        </div>
        <div class="separator separator-primary"></div>
        </div>
  </div>
</div>
@endsection