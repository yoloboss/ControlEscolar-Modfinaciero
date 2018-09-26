@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')


@section('content')
<div class="wrapper">
	<div class="page-header page-header-small">
  		<div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
  		</div>
  		<div class="content-center">
    		<div class="container">
      			<h1 class="title">Vista de alumnos</h1>
    		</div>
  		</div>
	</div>
	<div class="section section-about-us">
  		<div class="container">
    		<div class="row">
      			<div class="col-md-12 ml-auto mr-auto text-center">
              <div class="col-md-8 ml-auto mr-auto text-center">
                <a href="{{ url('/Usuario/alumno/')}}" class="badge badge-info">Listado de alumnos activos</a>
                <a href="{{ url('/Usuario/alumno/baja')}}" class="badge badge-warning">Lista de alumnos dados de baja</a>
              </div>
        			 <h2 class="title">Lista de alumnos</h2>
                 <a href="{{ url('/Usuario/alumno/resgistrar')}}" type="button" class="btn btn-info">Agregar Alumno</a>
        			   <table class="table">
    					     <thead>
        					   <tr>
            					<th class="text-center">Matricula</th>
            					<th class="text-center">Apellido Paterno</th>
            					<th class="text-center">Apellido Materno</th>
            					<th class="text-center">Nombre</th>
                      <th class="text-center">Grado</th>
                      <th class="text-center">Grupo</th>
                      <th class="text-center">Telefono</th>
                      <th class="text-center">Telefono Padre</th>
                      <th class="text-center">Telefono Madre</th>
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
                        <td>{{ $student->actlevel->grade ? $student->actlevel->grade->grado :'sin grado' }}</td>
                        <td>{{ $student->actlevel->group ? $student->actlevel->group->grupo :'sin grupo' }}</td>
                        <td>{{ $student->telefono}}</td>
                        <td>{{ $student->Telefono_p}}</td>
                        <td>{{ $student->Telefono_m}}</td>
            				    <td class="text-right">{{ $student->baja}}</td>
            				    <td class="td-actions text-left">
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
            				  </td>
        				    </tr>
                 @endforeach
    				        </tbody>
					     </table>
      			</div>       
    		</div>
	    </div>
  </div>
@endsection