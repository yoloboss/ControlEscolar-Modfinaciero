@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')

@section('content')
<div class="wrapper">
  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
    </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">Vista de conceptos de pago</h1>
        <div class="text-center">
      </div>
      </div>
    </div>
  </div>
  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Registro de nueovs coneptos de pago</h2>
           <form method="post" action="{{ url('/Usuario/concepto_pago/'.$concept->id.'/edicion')}}">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Nombre del concepto</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del cncepto..." name="nombre" value="{{$concept->nombre}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">concepto</label>
              <textarea class="form-control" name="concepto" id="exampleFormControlTextarea1" rows="3">   {{$concept->concepto}}</textarea>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Precio</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="descricion del concepto..." name="precio"  value="{{$concept->precio}}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Estatus del concepto</label>
              <select class="form-control" id="exampleFormControlSelect1" name="status" value="{{$concept->status}}">
                <option>Activo</option>
                <option>Inactivo</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection