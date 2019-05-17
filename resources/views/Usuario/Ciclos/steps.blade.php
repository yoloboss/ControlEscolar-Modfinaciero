@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')

@section('content')
<div class="wrapper">
    <div class="section section-about-us">
      <div class="container">
          <div class="row justify-content-center" style="margin-top: 30px;">
                <h3>{{$cycles->ciclo}}</h3>         
          </div>
          <hr class="style13">
        <div class="content-center">
            <div class="steps-form-2">
                <!-- Stepper -->
                <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
                    <div class="steps-step-2">
                        <a href="#step-1" type="button" class="btn btn-blue-grey  btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Asignar grupos activos"><i class="fa fa-landmark" aria-hidden="true"></i> </a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Promover alumnos"><i class="fa fa-user-graduate" aria-hidden="true"></i></a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Cartera de pago"><i class="fa fa-money-check-alt" aria-hidden="true"></i></a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finalizar"><i class="fa fa-check" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                
                    <div class="row setup-content-2" id="step-1">
                        <div class="col-md-12 text-center">
                            <form  method="post" action="{{ url('/Usuario/ciclo_escolar/'.$cycles->id.'/pasos')}}">
                                @csrf
                                <div class="card card-nav-tabs card-plain">
                                <div class="card-header card-header-danger">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                             <li class="nav-item">
                                                    <a class="nav-link active" href="#datos_g" data-toggle="tab">Ingresar niveles</a>
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
                                <div class="form-control">
                                    <div class="tab-content text-center">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Nivel escolar</label>
                                                <select class="form-control" name="level_id" id="exampleFormControlSelect1">
                                                    @foreach($levels as $level)
                                                    <option value="{{$level->id}}">{{$level->nivel_educativo}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-inline col-md-12">
                                               <div class="form-group col-md-4">
                                                <label for="exampleFormControlSelect1">Turno</label>
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="None selected" style="width: auto;" >Seleccione uno <b class="caret">
                                                </b>
                                                </button>
                                                <ul class="multiselect-container dropdown-menu">
                                                    @foreach($Turns as $Turn)
                                                    <li class="">
                                                        <a href="javascript:void(0);">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="turnos[]" value="{{$Turn->id}}">{{$Turn->Turno}}
                                                            </label>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlSelect1">Grado</label>
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="None selected" style="width: auto;">Seleccione uno <b class="caret">
                                                </b>
                                                </button>
                                                <ul class="multiselect-container dropdown-menu">
                                                     @foreach($grades as $grade)
                                                    <li class="">
                                                        <a href="javascript:void(0);">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="grados[]" value="{{$grade->id}}">{{$grade->grado}}
                                                            </label>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="exampleFormControlSelect1">Grupo</label>
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="None selected" style="width: auto;">Seleccione uno <b class="caret">
                                                </b>
                                                </button>
                                                <ul class="multiselect-container dropdown-menu">
                                                     @foreach($groups as $group)
                                                    <li class="">
                                                        <a href="javascript:void(0);">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="grupos[]"  value="{{$group->id}}">{{$group->grupo}}
                                                            </label>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            
                                            </div>
                                            <button type="submit" class="btn btn-primary float-right">Registrar</button> 
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12"> 
                            @php
                            $actlevels=App\Actlevel::latest()->paginate(10);
                             @endphp
                            <h3 class="font-weight-bold pl-0 my-4"><strong>Asignar grupos activos</strong></h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nombre del nivel</th>
                                    <th class="text-center">Grado</th>
                                    <th class="text-center">Grupo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($actlevels as $actlevel)
                                    <tr>
                                    <td class="text-center">{{ $actlevel->id}}</td>
                                        <td>{{ $actlevel->level->nivel_educativo}} </td>
                                        <td>{{ $actlevel->grade->grado ? $actlevel->grade->grado :'sin grado' }}</td>
                                        <td>{{ $actlevel->group->grupo ? $actlevel->group->grupo :'sin grupo'}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$actlevels -> links()}}
                            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Siguiente</button>
                        </div>
                    </div>

                    <!-- Second Step -->
                    <div class="row setup-content-2" id="step-2">
                        <div class="col-md-12">
                            <h3 class="font-weight-bold pl-0 my-4"><strong>Promover alumnos</strong></h3>
                            <div class="form-group md-form">
                                <form  method="post" action="{{ url('/Usuario/ciclo_escolar/'.$cycles->id.'/pasos/promover')}}">
                                @csrf
                                <button class="btn btn-success btn-mdb-color btn-rounded float-center" type="submit">Promover</button>
                            </form>
                            </div>
                           
                            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Regresar</button>
                            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Siguiente</button>
                        </div>
                    </div>

                    <!-- Third Step -->
                    <div class="row setup-content-2" id="step-3">
                        <div class="col-md-12">
                            <form >
                            <h3 class="font-weight-bold pl-0 my-4"><strong>Cartera de pago de ciclo:{{$cycles->ciclo}}</strong></h3>
                            <div>
                                <button type="button" class="btn btn-primary abrirmodal"   data-toggle="modal" data-target="#modal">
                                            Ingresar cobros
                                          </button>
                            </div>
                            @php
                            $conceptos =App\payment_concept::latest()->paginate(10);
                            @endphp
                            <div  class="col-md-12">
                            
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th class="text-center">Folio</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Siguiente fecha de pago</th>
                                    <th class="text-center">siguiente pago</th>
                                    <th class="text-center">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                            {{$conceptos -> links()}}
                            </div>
                            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Regresar</button>
                            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Siguiente</button>
                        </form>
                        </div>
                    </div>

                    <!-- Fourth Step -->
                    <div class="row setup-content-2" id="step-4">
                        <div class="col-md-12">
                            <h3 class="font-weight-bold pl-0 my-4"><strong>Finalisar registro de ciclo</strong></h3>
                            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Regresar</button>
                         <button class="btn btn-success btn-rounded float-right" type="submit">Terminar</button>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

@push('modal')
@php
        $pagos=App\payment_concept::all();
    @endphp
      <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form method="POST" action="{{ url('/Usuario/ciclo_escolar/'.$cycles->id.'/pasos/cartera')}}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Agregar cobros .</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div id="pagos" class="modal-body">
                <div class="form-row"> 
                  <div class="form-group col-md-4">
                    <label class="sr-only" for="exampleFormControlSelect1">Nombre del pago</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="nivel">
                    <option value="">Pago</option>
                    @foreach($pagos as $pago)
                      <option value="{{$pago->id}}">{{$pago->nombre}}</option>
                    @endforeach 
                    </select>
                  </div>
                  <div class="form-group col-md-8">
                    <label class="sr-only" for="exampleFormControlSelect1">Descripcion</label>
                    <input type="text" name="descripcion" class="form-control" id="inputNombre"  value="Nombre">
                  </div>
                  <div class="form-group col-md-4">
                    <label class="sr-only" for="exampleFormControlSelect1">Precio</label>
                    <input type="text" name="precio" class="form-control" id="inputNombre"  value="precio">
                  </div>
                  <div class="form-group col-md-4">
                    <label class="sr-only" for="exampleFormControlSelect1">Nivel</label>
                    <input type="text" name="nivel" class="form-control" id="inputNombre"  value="Nivel">
                  </div>
                </div>
                <div class="form-inline">
                  <div class="form-group col-md-4">
                    <label class="sr-only" for="exampleFormControlSelect1">Periodicidad</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="pero">
                    <option value="1">un solo pago</option>
                      <option value="3">a 3 Meses</option>
                      <option value="6">a 6 Meses</option> 
                      <option value="12">a 12 Meses</option>  
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label class="sr-only" for="exampleFormControlSelect1">Primera fecha de pago</label>
                    <input type="text" name="fecha_nacimineto" class="form-control date-picker" placeholder="AAAA/MM/DD"  data-datepicker-color="primary" value="">
                        </div>
                  </div>
                </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Guardar cobro</button>
                  </div>
            </div>
         </form>
        </div>
      </div>
    @endpush
 
