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
              <a href="{{ url('/Usuario/Nivel/resgistrar')}}" type="button" class="btn btn-info">Agregar nivel educativo</a>
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
                        <a href="{{url('/Usuario/alumno/'.$actlevel->id.'/edicion')}}" rel="tooltip" class="btn btn-success">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                        </a>
                        <button type="button" rel="tooltip" class="btn btn-danger">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
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