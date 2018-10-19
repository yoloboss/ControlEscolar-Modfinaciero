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
          <div class="nav-tabs-wrapper col-md-16 ml-auto mr-auto text-center">
                <div>
                  <label for="exampleFormControlSelect1">Filtrar por:</label>
                </div>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li>  
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/Usuario/Nivel/')}}" class="nav-link active" >Activos</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/Usuario/Nivel/baja')}}" class="nav-link active" >Baja</a>
                  </li>
                  <br>
                </ul>
          </div>
          <div class="form-inline col-md-16 ml-auto mr-auto text-center"><!– Barra de busqueda — >
                    <div class="form-inline col-md-12 text-center">
                      <h6 class="title">Barra de busqueda</h6>
                      <form method="post" action="/Usuario/alumno/busqueda" class="form-inline  col-md-16 ml-auto mr-auto  blockquote">
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
          </div>
          <div class="col-md-8 ml-auto mr-auto text-center"><!– Tabla de despliegue— >
            
            <h2 class="title">Lista de Niveles</h2>
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
                        <td>{{ $actlevel->level->nivel_educativo}} </td>
                        <td>{{ $actlevel->grade->grado ? $actlevel->grade->grado :'sin grado' }}</td>
                        <td>{{ $actlevel->group->grupo ? $actlevel->group->grupo :'sin grupo'}}</td>
                        <td class="td-actions text-right">
                          <FORM method="post" action="{{url('/Usuario/Nivel/'.$actlevel->id.'/eliminar')}}">
                          @csrf
                            <a href="{{url('/Usuario/Nivel/'.$actlevel->id.'/edicion')}}" rel="tooltip" class="btn btn-success">
                              <i class="now-ui-icons ui-2_settings-90"></i>
                            </a>
                            <button type="submit" rel="tooltip" class="btn btn-danger">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                          </FORM>
                        </td>
                    </tr>
                 @endforeach
                </tbody>
               </table>
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