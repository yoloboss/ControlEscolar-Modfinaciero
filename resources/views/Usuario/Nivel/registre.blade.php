@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')

@section('content')
<div class="wrapper">
  <div class="page-header page-header-small">
    <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
    </div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">Vista de Niveles</h1>
        <div class="text-center">
      </div>
      </div>
    </div>
  </div>
  <div class="section section-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Registro de Niveles</h2>
           <form method="post" action{{ url('/Usuario/alumno/resgistrar')}}>
            @csrf
            <div class="card card-nav-tabs card-plain">
              <div class="card-header card-header-danger">
                <div class="text-right">
                <a href="{{ url('/Usuario/Nivel/')}}" type="button" class="btn btn-primary now-ui-icons arrows-1_minimal-left">&nbsp;Regresar</a>
                </div>
                <div class="nav-tabs-navigation">
                  <div class="nav-tabs-wrapper">
                    <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#datos_g" data-toggle="tab">Datos Generales</a>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
              @php
                $grades=App\grade::all();
                $groups=App\group::all();
                $levels=App\level::all();
                $Turns=App\Turn::all();
                @endphp
              <div class="card-body ">
                <div class="tab-content text-center">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Nivel escolar</label>
                    <select class="form-control" name="level_id" id="exampleFormControlSelect1">
                    @foreach($levels as $level)
                    <option value="{{$level->id}}">{{$level->nivel_educativo}}</option>
                    @endforeach
                    </select>
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Turno</label>
                  <select class="form-control"  name="turno_id" id="exampleFormControlSelect1">
                  @foreach($Turns as $Turn)
                    <option value="{{$Turn->id}}">{{$Turn->Turno}}</option>
                  @endforeach
                  </select>
                </div>
                <div class="form-group">
                <label for="exampleFormControlSelect1">Grado</label>
                  <select class="form-control" name="grado_id" id="exampleFormControlSelect1">

                    @foreach($grades as $grade)
                    <option value="{{$grade->id}}">{{$grade->grado}}</option>
                    @endforeach

                  </select>
                </div>
                
              <div class="form-group">
                <label for="exampleFormControlSelect1">Grupo</label>
                  <select class="form-control" name="grupo_id" id="exampleFormControlSelect1">
                    @foreach($groups as $group)
                    <option value="{{$group->id}}">{{$group->grupo}}</option>
                    @endforeach
                  </select>
              </div>
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
              </div>
            </div>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection