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
            <h1 class="title">Niveles Educativos</h1>
        </div>
      </div>
  </div>
  -->
  <div class="section section-about-us">
      <div class="container">
        <div class="row justify-content-center" style="margin-top: 30px;">
                <h3>Niveles educativos</h3>         
          </div>
          <hr class="style13">
        <div class="row">
          <!– Barra de busqueda — >
                      <form method="post" action="/Usuario/Nivel/busqueda" class="form-inline  col-md-16 ml-auto mr-auto ">
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
                        <button type="submit" class="btn btn-info now-ui-icons ui-1_zoom-bold"></button>
                      </form>
          </div>
          <div class="row">
            <div class="col-md-4">
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a href="{{ url('/Usuario/Nivel/')}}" class="nav-link active" >Activos</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/Usuario/Nivel/baja')}}" class="nav-link active" >Baja</a>
                  </li>
                </ul>
            </div>
          </div>

        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center"><!– Tabla de despliegue— >
              <!--<div class="ml-auto mr-auto text-right" >
                <a href="{{ url('/Usuario/Nivel/resgistrar')}}" type="button" class="btn btn-primary now-ui-icons ui-1_simple-add">&nbsp;nivel educativo</a>
              </div>-->
              
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
                        <td>{{ $actlevel->nivel}} </td>
                        <td>{{ $actlevel->grado ? $actlevel->grado :'sin grado' }}</td>
                        <td>{{ $actlevel->grupo ? $actlevel->grupo :'sin grupo'}}</td>
                        <td class="td-actions text-right">
                          <FORM method="post" action="{{url('/Usuario/Nivel/'.$actlevel->id.'/eliminar')}}">
                          @csrf
                            <a href="{{url('/Usuario/Nivel/'.$actlevel->id.'/edicion')}}" rel="tooltip" class="btn btn-info">
                              <i class="far fa-edit"></i>
                            </a>
                            <button type="submit" rel="tooltip" class="btn btn-danger">
                              <i class="far fa-calendar-times"></i>
                            </button>
                          </FORM>
                        </td>
                      
                    </tr>
                 @endforeach
                </tbody>
               </table>
               {{$actlevels -> render()}}
          </div>
        </div>
      </div>
  </div>
</div>
<footer class="footer">
          <div class="container">
            <div class="copyright" id="copyright">
              &copy;
              <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
              </script>, Designed by
              <a href="http://acadep.com/wp/" target="_blank">ACADEP</a>
            </div>
          </div>
</footer>
@endsection