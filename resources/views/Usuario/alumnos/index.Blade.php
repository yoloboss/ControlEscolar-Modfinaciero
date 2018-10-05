@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')


@section('content')
<div class="wrapper">
	<div class="page-header page-header-small">
  		<div class="page-header-image" data-parallax="false" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
  		</div>
  		<div class="content-center">
    		<div class="container">
      			<h1 class="title">Alumnos</h1>
    		</div>
  		</div>
	</div>
	<div class="section section-about-us">
  		<div class="container">
    		<div class="row">
      			<div class="form-inline col-md-16 ml-auto mr-auto text-center">
              <div class="nav-tabs-wrapper col-md-16 ml-auto mr-auto text-left">
                <div>
                  <label for="exampleFormControlSelect1">Filtrar por:</label>
                </div>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li>  
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/Usuario/alumno/')}}" class="nav-link active" >Activos</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/Usuario/alumno/baja')}}" class="nav-link active" >Baja</a>
                  </li>
                  <br>
                </ul>
              </div>
              <form method="post" action="/Usuario/alumno/busqueda" class="form-inline col-md-16 ml-auto mr-auto text-left blockquote" style="margin-top :10xp !important;">
                     {{csrf_field()}}
                      <div class="form-group col-md-12">
                        <label for="nombre">Nombre&nbsp;</label>
                        <input type="text" name="nombre"  class="form-control" id="inputNombre"  >&nbsp;
                        <button type="submit" class="btn btn-info now-ui-icons ui-1_zoom-bold"></button>
                      </div>
                      @php
                      $levels=App\level::all();
                      $groups=App\group::all();
                      $grades=App\grade::all();
                      @endphp
                      <div class="form-group col-md-3">
                        <label for="exampleFormControlSelect1">Nivel educativo</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="nivel">
                        <option value="">seleccione una opción</option>
                          @foreach($levels as $level)
                          <option value="{{$level->id}}">{{$level->nivel_educativo}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="exampleFormControlSelect1">grado</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="grado">
                          <option value="">seleccione una opción</option>
                          @foreach($grades as $grade)
                          <option value="{{$grade->id}}">{{$grade->grado}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="exampleFormControlSelect1">grupo</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="grupo">
                          <option value="">seleccione una opción</option>
                          @foreach($groups as $group)
                          <option value="{{$group->id}}">{{$group->grupo}}</option>
                          @endforeach
                        </select>
                      </div>
                  </form>

        			 <h2 class="title ">Lista de alumnos</h2>
                  <div class="col-md-12 ml-auto mr-auto text-right">
                    <a href="{{ url('/Usuario/alumno/resgistrar')}}" type="button" class="btn btn-primary now-ui-icons ui-1_simple-add">&nbsp;Nuevo</a>
                  </div>
        			   <table class="table">
    					     <thead>
        					   <tr>
            					<th class="text-center">Matrícula</th>
            					<th class="text-center">Apellido Paterno</th>
            					<th class="text-center">Apellido Materno</th>
            					<th class="text-center">Nombre</th>
                      <th class="text-center">Grado</th>
                      <th class="text-center">Grupo</th>
                      <th class="text-center">Teléfono</th>
                      <th class="text-center">Teléfono Padre</th>
                      <th class="text-center">Teléfono Madre</th>
            					<th class="text-right">Estado</th>
            					<th class="text-left">Opciones</th>
        					   </tr>
    					     </thead>
    				        <tbody>
                  @foreach($students as $student)
        				    <tr>
            				  <td class="text-left">{{ $student->id}}</td>
            				    <td class="text-center">{{ $student->apellido_P}} </td>
            				    <td class="text-center">{{ $student->apellido_M}}</td>
            				    <td class="text-center">{{ $student->nombre}}</td>
                        <td>{{ $student->actstudent->act->grade->grado}}</td>
                        <td>{{ $student->actstudent->act->group->grupo}}</td>
                        <td>{{ $student->telefono}}</td>
                        <td>{{ $student->Telefono_p}}</td>
                        <td>{{ $student->Telefono_m}}</td>
            				    <td class="text-right">{{ $student->baja}}</td>
            				    <td class="td-actions text-left">
                        <div class="col-md-2">
                            <FORM method="post" action="{{url('/Usuario/alumno/'.$student->id.'/eliminar')}}">
                          @csrf
                          <div class="col-md-2 ml-auto mr-auto text-center">
                            <a href="{{url('/Usuario/alumno/'.$student->id.'/edicion')}}" rel="tooltip" class="btn btn-success">
                              <i class="now-ui-icons ui-2_settings-90"></i>
                            </a>  
                            <button type="submit" rel="tooltip" class="btn btn-danger">
                              <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button> 
                          </div>
                        </FORM>
                      </div>
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

@endsection