@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')


@section('content')
<div class="wrapper">
  <div class="page-header page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
      </div>
      <div class="content-center">
        <div class="container">
            <h1 class="title">conceptos de pago</h1>
        </div>
      </div>
  </div>
  <div class="section section-about-us">
      <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h2 class="title">Lista de conceptos de pago</h2>
              <a href="{{ url('/Usuario/concepto_pago/resgistrar')}}" type="button" class="btn btn-info">Agregar concepto de pago</a>
                 <table class="table">
                   <thead>
                     <tr>
                      <th class="text-center">Nombre</th>
                      <th class="text-center">Descipcion del concepto</th>
                      <th class="text-center">Precio</th>
                      <th class="text-center">Estatus</th>
                      <th class="text-center">Opciones</th>
                     </tr>
                   </thead>
                    <tbody>
                  @foreach($concepts as $concept)
                    <tr>
                      <td class="text-center">{{ $concept->nombre}}</td>
                      <td>{{ $concept->concepto}} </td>
                      <td>{{ $concept->precio}} </td>
                      <td>{{ $concept->status}} </td>
                      <td class="td-actions text-right">
                        <FORM method="post" action="{{url('/Usuario/concepto_pago/'.$concept->id.'/eliminar')}}">
                          @csrf
                          <div class="col-md-2 ml-auto mr-auto text-center">
                            <a href="{{url('/Usuario/concepto_pago/'.$concept->id.'/edicion')}}" rel="tooltip" class="btn btn-success">
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
        <div class="separator separator-primary"></div>
        </div>
  </div>
</div>
@endsection