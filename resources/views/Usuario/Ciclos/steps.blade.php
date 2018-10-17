@extends('layouts.app')

@section('body-class','landing-page sidebar-collapse')

@section('content')
<div class="wrapper">
    <div class="page-header page-header-small">
        <div class="page-header-image" data-parallax="false" style="background-image: url('{{asset('/img/bg6.jpg')}}');">
        </div>
        <div class="content-center">
            <div>
                <h2 class="title">"{{$cycles->ciclo}}"</h2>
            </div>
            <div class="steps-form-2">
                <!-- Stepper -->
                <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
                    <div class="steps-step-2">
                        <a href="#step-1" type="button" class="btn btn-blue-grey  btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Asignar grupos activos"><i class="now-ui-icons business_bank"></i> </a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-2" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Promover alumnos"><i class="now-ui-icons users_circle-08" aria-hidden="true"></i></a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-3" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Cartera de pago"><i class="now-ui-icons business_money-coins" aria-hidden="true"></i></a>
                    </div>
                    <div class="steps-step-2">
                        <a href="#step-4" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <form role="form" action="/Usuario/Nivel/resgistrar" method="post">
                    <div class="row setup-content-2" id="step-1">
                        <div class="col-md-12 text-center">
                            <form method="post" action{{ url('/Usuario/Nivel/resgistrar')}}>
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
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="None selected" style="width: auto;" >None selected <b class="caret">
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
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Grado</label>
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="None selected" style="width: auto;">None selected <b class="caret">
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
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Grupo</label>
                                                <button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="None selected" style="width: auto;">None selected <b class="caret">
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
                                            <button type="submit" class="btn btn-primary">Registrar</button>
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
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-sign"></span>
                                                Asignar
                                                </label>
                                            </div>
                                        </td>
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
                                <label for="yourName-2" data-error="wrong" data-success="right">First Name</label>
                                <input id="yourName-2" type="text" required="required" class="form-control validate">
                            </div>
                            <div class="form-group md-form mt-3">
                                <label for="secondName-2" data-error="wrong" data-success="right">Second Name</label>
                                <input id="secondName-2" type="text" required="required" class="form-control validate">
                            </div>
                            <div class="form-group md-form">
                                <label for="surname-2" data-error="wrong" data-success="right">Surname</label>
                                <input id="surname-2" type="text" required="required" class="form-control validate">
                            </div>
                            <div class="form-group md-form mt-3">
                                <label for="yourAddress-2" data-error="wrong" data-success="right">Address</label>
                                <textarea id="yourAddress-2" type="text" required="required" rows="2" class="md-textarea validate form-control"></textarea>
                            </div>
                            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Regresar</button>
                            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Siguiente</button>
                        </div>
                    </div>

                    <!-- Third Step -->
                    <div class="row setup-content-2" id="step-3">
                        <div class="col-md-12">
                            <h3 class="font-weight-bold pl-0 my-4"><strong>Crear cartera de pago</strong></h3>
                            <div class="form-check">
                                <input type="checkbox" id="checkbox111" class="form-check-input">
                            <label for="checkbox111" class="form-check-label">I agree to the terms and conditions</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" id="checkbox112" class="form-check-input">
                                <label for="checkbox112" class="form-check-label">I want to receive newsletter</label>
                            </div>
                            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Regresar</button>
                            <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Siguiente</button>
                        </div>
                    </div>

                    <!-- Fourth Step -->
                    <div class="row setup-content-2" id="step-4">
                        <div class="col-md-12">
                            <h3 class="font-weight-bold pl-0 my-4"><strong>Finish</strong></h3>
                            <h2 class="text-center font-weight-bold my-4">Registration completed!</h2>
                            <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
                         <button class="btn btn-success btn-rounded float-right" type="submit">Submit</button>
                        </div>
                    </div>
                </form> 
                </div>
                <!-- First Step -->  
            </div>
        </div>
    </div>
</div>
@endsection
