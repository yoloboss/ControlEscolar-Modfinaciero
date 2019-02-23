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
            <h1 class="title">conceptos de pago</h1>
        </div>
      </div>
  </div>
-->
  <div class="section section-about-us">
      <div class="container">
        <div class="row justify-content-center" style="margin-top: 30px;">
                <h3>Conceptos de pago</h3>         
          </div>
          <hr class="style13">
        <div class="row">
            <div class="col-md-16 ml-auto mr-auto text-center">
              <div>
                <h2 class="title">Lista de conceptos de pago</h2>
              </div>
              <div class="col-md-16 ml-auto mr-auto text-right">
                <a href="{{ url('/Usuario/concepto_pago/resgistrar')}}" type="button" class="btn btn-secondary "> <i class="far fa-calendar-plus"></i>&nbsp;Nuevo</a>
              </div>
              @php
               $conceptos=App\payment_concept::paginate(5);
              @endphp
              <div>
                
              </div>
                 <table class="table table-condensed">
                   <thead>
                     <tr>
                      <th class="text-center">Nombre</th>
                      <th class="text-center">Descipcion del concepto</th>
                      <th class="text-center">Precio</th>
                      <th class="text-center">Estatus</th>
                      <th class="text-center">Nivel donde se aplica</th>
                      <th class="text-center">Opciones</th>
                     </tr>
                   </thead>
                    <tbody>
                  @foreach($concepts as $concept)
                    <tr>
                      <td class="text-center">{{ $concept->nombre}}</td>
                      <td class="text-center">{{ $concept->concepto}} </td>
                      <td class="text-center">{{ $concept->precio}} $</td>
                      <td class="text-center">{{ $concept->estado}} </td>
                      <td class="text-center">{{ $concept->nivel}} </td>
                      <td class="td-actions text-right">
                        <div class="form-inline">
                          <FORM method="post" action="{{url('/Usuario/concepto_pago/'.$concept->id.'/eliminar')}}" class="form-inline">
                          @csrf
                            <a href="{{url('/Usuario/concepto_pago/'.$concept->id.'/edicion')}}" rel="tooltip" class="btn btn-info">
                            <i class="far fa-edit"></i>
                            </a>  
                            <button type="submit" rel="tooltip" class="btn btn-danger">
                            <i class="far fa-calendar-times"></i>
                            </button>
                        </FORM>
                        </div>
                      </td>
                    </tr>
                 @endforeach
                    </tbody>
               </table>
               {{$conceptos -> links()}}
            </div>
        </div>
        <div class="separator separator-primary"></div>
        </div>
  </div>
</div>
@endsection