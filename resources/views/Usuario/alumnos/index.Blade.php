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
      			<div class="col-md-8 ml-auto mr-auto text-center">
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
            					<th class="text-right">Opciones</th>
        					   </tr>
    					     </thead>
    				        <tbody>
                  @foreach($students as $student)
        				    <tr>
            				  <td class="text-center">{{ $student->id}}</td>
            				    <td>{{ $student->apellido_P}} </td>
            				    <td>{{ $student->apellido_M}}</td>
            				    <td>{{ $student->nombre}}</td>
                        <td>null</td>
                        <td>null</td>
                        <td>{{ $student->telefono}}</td>
                        <td>{{ $student->Telefono_p}}</td>
                        <td>{{ $student->Telefono_p}}</td>
            				    <td class="text-right">{{ $student->baja}}</td>
            				    <td class="td-actions text-right">
                				<a href="{{url('/Usuario/alumno/'.$student->id.'/edicion')}}" rel="tooltip" class="btn btn-success">
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
              {{$students->links()}}
      			</div>
            
          
    		</div>
    		<div class="separator separator-primary"></div>
  			</div>
	</div>
</div>
@endsection