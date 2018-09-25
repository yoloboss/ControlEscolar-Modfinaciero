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
              <a href="{{ url('/Usuario/Nivel/resgistrar')}}" type="button" class="btn btn-info">Agregar nuevo ciclo</a>
                 <table class="table">
                   <thead>
                     <tr>
                      <th class="text-center">seleccion</th>
                      <th class="text-center">ciclo escolar</th>
                      <th class="text-center">estatus</th>
                     </tr>
                   </thead>
                    <tbody>
                  @foreach($cycles as $cycle)
                    <tr>
                      <td class="td-actions text-right">
                        <input class="form-check-input"  type="radio" >
                            <span class="form-check-sign">
                              <span class="check" ></span>
                            </span>
                            <i class="now-ui-icons ui-2_settings-90"></i>
                      </td>
                      <td class="text-center">{{ $cycle->ciclo}}</td>
                      <td>{{ $cycle->status}} </td>
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