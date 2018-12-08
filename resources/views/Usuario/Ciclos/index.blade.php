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
            <h1 class="title">Ciclos escolaress</h1>
        </div>
      </div>
  </div>
-->
  <div class="section section-about-us">
      <div class="container">
        <div class="row justify-content-center" style="margin-top: 30px;">
                <h3>Ciclos escolares</h3>         
          </div>
          <hr class="style13">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <div>
                <h2 class="title">Lista de ciclos escolares</h2>
              </div>
              <div class="col-md-12 ml-auto mr-auto text-right">
                <a href="{{ url('/Usuario/ciclo_escolar/resgistrar')}}" type="button" class="btn btn-secondary now-ui-icons ui-1_simple-add">&nbsp;Nuevo</a>
              </div>
                 <table class="table table-condensed">
                   <thead>
                     <tr>
                      <th class="text-center">Editar</th>
                      <th class="text-center">ciclo escolar</th>
                      <th class="text-center">estatus</th>
                      <th class="text-center">Progreso</th>
                     </tr>
                   </thead>
                    <tbody>
                  @foreach($cycles as $cycle)
                    <tr>
                      <td class="td-actions text-right">
                        <a href="{{url('/Usuario/ciclo_escolar/'.$cycle->id.'/edicion')}}" rel="tooltip" class="btn btn-info">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                        </a>
                      </td>
                      <td class="text-center">{{ $cycle->ciclo}}</td>
                      <td>{{ $cycle->status}} </td>
                      <td class="td-actions text-center">
                        <a href="{{url('/Usuario/ciclo_escolar/'.$cycle->id.'/pasos')}}" class="btn btn-success">
                            <i class="now-ui-icons check-circle-07"></i>
                        </a>
                      </td>
                    </tr>
                 @endforeach
                    </tbody>
               </table>
            </div>
        </div>
        <div class="separator separator-primary"></div>
        </div>
  </div>
</div>
@endsection