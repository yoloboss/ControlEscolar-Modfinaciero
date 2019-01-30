@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')


@section('content')
<div class="wrapper">
  <!--
  <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="false" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
      </div>
      <div class="content-center">
        <div class="container">
            <h1 class="title">Alumnos</h1>
<<<<<<< HEAD
        </div> 
=======
        </div>
>>>>>>> cb96491650571715b81f81af4675802525a1d765
      </div>
  </div>
 -->

  <div class="section section-about-us">
      <div class="container">
          <div class="row justify-content-center" style="margin-top: 30px;">
                <h3>Alumnos</h3>         
          </div>
          <hr class="style13">
          <div class="row">
              <form method="post" action="/Usuario/alumno/busqueda" class="form-inline col-md-12 ml-auto mr-auto text-left">
                  <div class="form-row"> 
                    {{csrf_field()}}
                      @php
                        $levels=App\level::all();
                        $groups=App\group::all();
                        $grades=App\grade::all();
                      @endphp
                      <div class="form-group col-md-4">
                        <label class="sr-only" for="inputNombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="inputNombre"  placeholder="Nombre">
                      </div>
                      <div class="form-group col-md-3">
                        <label class="sr-only" for="exampleFormControlSelect1">Nivel educativo</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="nivel">
                        <option value="">Nivel educativo</option>
                          @foreach($levels as $level)
                          <option value="{{$level->id}}">{{$level->nivel_educativo}}</option>
                          @endforeach 
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label class="sr-only" for="exampleFormControlSelect1">Grado</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="grado">
                          <option value="">Grado</option>
                          @foreach($grades as $grade)
                          <option value="{{$grade->id}}">{{$grade->grado}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-2">
                        <label class="sr-only" for="exampleFormControlSelect1">Grupo</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="grupo">
                          <option value="">Grupo</option>
                          @foreach($groups as $group)
                          <option value="{{$group->id}}">{{$group->grupo}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-1">
                        <button type="submit" class="btn btn-primary now-ui-icons ui-1_zoom-bold"></button>
                      </div>
                    </div>
              </form>
          </div>
          <div class="row">
            <div class="col-md-4">
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li>  
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/Usuario/alumno/')}}" class="nav-link active" >Activos</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/Usuario/alumno/baja')}}" class="nav-link active" >En baja</a>
                  </li>
                </ul>
            </div>
            <div class="col-md-2 offset-md-6">
              <a href="{{ url('/Usuario/alumno/resgistrar')}}" type="button" class="btn btn-secondary "><i class="fa fa-user-plus"></i></a>
            </div>    
          </div>
          <div class="row">
            @php
            $estudiates=App\student::latest()->paginate(10);
            @endphp
            <table class="table  table-condensed">
                 <thead> 
                   <tr>
                    <th class="text-center">Matrícula</th>
                    <th class="text-center">Apellido Paterno</th>
                    <th class="text-center">Apellido Materno</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Teléfono</th>
                    <th class="text-center">Grado</th>
                    <th class="text-center">Grupo</th>
                    <th class="text-center">Estatus</th>
                    <th class="text-center">Opciones</th>
                   </tr>
                 </thead>
                 <tbody> 
                  @foreach($students as $student)
                  <tr>
                    <td class="text-center" style="text-align: center; vertical-align: middle;">{{ $student->matricula}}</td>
                      <td class="text-center" style="text-align: center; vertical-align: middle;">{{ $student->apellido_P}} </td>
                      <td class="text-center" style="text-align: center; vertical-align: middle;">{{ $student->apellido_M}}</td>
                      <td class="text-center" style="text-align: center; vertical-align: middle;">{{ $student->nombre}}</td>
                      <td style="text-align: center; vertical-align: middle;">{{ $student->telefono}}</td>

                      <td style="text-align: center; vertical-align: middle;">{{ $student->grado}}</td>
                      <td style="text-align: center; vertical-align: middle;">{{ $student->grupo}}</td>
                      <td style="text-align: center; vertical-align: middle;">{{ $student->baja}}</td>
                      <td>
                          <form method="post" action="/Usuario/alumno/eliminar">
                            @csrf

                            <input type="hidden" name="student_id" value="{{$student->matricula}}">
                              <a href="{{url('/Usuario/alumno/'.$student->matricula.'/edicion')}}" rel="tooltip" class="btn btn-info">
                                <i class="fa fa-user-edit"></i>
                              </a>

                              <button type="submit" class="btn btn-danger">
                                <i class="fa fa-user-times"></i>
                              </button> 

                          </form>
                      </td>
                  </tr>
                  @endforeach
                 </tbody>
            </table>
             {{$estudiates -> links()}}
          </div>
         <!-- <div class="row justify-content-center">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                </ul>
              </nav>
          </div>-->
      </div>
  </div>
</div>

@endsection