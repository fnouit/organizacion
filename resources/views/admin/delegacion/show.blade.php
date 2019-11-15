@extends('layouts.master')
@section('title', 'Inicial')

@section('content')
        <main class="main">
            <p></p>
            <div class="container-fluid">
                <div id="ui-view">
                    <div>
                        <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
                        <div class="animated fadeIn">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-home"></i> <a href="/">Inicio</a> / <a href="{{url('/delegacion')}}">Delegaciones</a> / {{$delegacion->deleg}}
                                </div>
                                <div class="card-body">
                                    <div id="DataTables_Table_0_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="d-flex justify-content-center">
                                                    <div class="col-md-10">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <center>
                                                                    <strong><h5>DIRECTORIO COMITÉ DELEGACIONAL</h5></strong>
                                                                </center>
                                                                <div class="float-right">
                                                                    <a href="#"><i class="fa fa-print fa-2x"></i></a>
                                                                </div>

                                                            </div>
                                                            <div class="card-body">
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="comite"><strong>COMITÉ</strong></label>
                                                                        <input class="form-control" type="text" placeholder="ACTIVOS" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="data_in"><strong>PERIODO SINDICAL</strong></label>
                                                                        <input class="form-control" type="text" placeholder="{{\Carbon\Carbon::parse($delegacion->p_inicial)->format('d/m/Y')}}  AL   {{\Carbon\Carbon::parse($delegacion->p_final)->format('d/m/Y')}}" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="delegacion">
                                                                            <strong>DELEGACIÓN</strong>
                                                                        </label>
                                                                        <input class="form-control" type="text" placeholder="{{$delegacion->deleg}} {{$delegacion->sede}}" readonly>                                                                                                                                                    
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="niveles">
                                                                            <strong>NIVEL EDUCATIVO</strong>
                                                                        </label>
                                                                        <input class="form-control" type="text" placeholder="ACTIVOS" readonly>
                                                                        
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="regiones">
                                                                            <strong>REGIÓN</strong>
                                                                        </label>
                                                                        <input class="form-control" type="text" placeholder="{{$delegacion->region->nombre}} - {{$delegacion->region->sede}}" readonly>
                                                                    </div>
                                                                </div> <hr>

                                                                <div class="rounded-pill" style="
                                                                    font-weight:700;
                                                                    color: rgb(47, 53, 58);
                                                                    background-color: #e4e7ea;
                                                                    padding: 6px;
                                                                    margin-bottom: 14px;">
                                                                    DOMICILIO DELEGACIONAL
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="calle">
                                                                        <strong>CALLE</strong></label>
                                                                        <input class="form-control" type="text" placeholder="{{$delegacion->calle}}" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-2">
                                                                        <label for="num">
                                                                        <strong>NÚMERO</strong></label>
                                                                        <input class="form-control" type="text" placeholder="{{$delegacion->numero_ext}}" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="colonia">
                                                                        <strong>COLONIA</strong></label>
                                                                        <input class="form-control" type="text" placeholder="{{$delegacion->colonia}}" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-2">
                                                                        <label for="cp">
                                                                        <strong>C.P.</strong></label>
                                                                        <input class="form-control" type="text" placeholder="{{$delegacion->cp}}" readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="telefono">
                                                                        <strong>NÚMERO TELEFÓNICO</strong></label>
                                                                        <input class="form-control" type="text" placeholder="{{$delegacion->telefono}}" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="ciudad">
                                                                        <strong>CIUDAD</strong></label>
                                                                        <input class="form-control" type="text" placeholder="{{$delegacion->ciudad}}" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-2">
                                                                        <label for="municipio">
                                                                        <strong>MUNICIPIO</strong></label>
                                                                        <input class="form-control" type="text" placeholder="{{$delegacion->municipio}}" readonly>
                                                                    </div>
                                                                    <div class="form-group col-md-2">
                                                                        <label for="cp">
                                                                        <strong>ESTADO</strong></label>
                                                                        <input type="text" class="form-control" placeholder="VERACRUZ" readonly>
                                                                    </div>
                                                                </div>



                                                                <div class="form-group">
                                                                    <div class="modal fade" id="primaryModal"
                                                                        tabindex="-1" role="dialog"
                                                                        aria-labelledby="myModalLabel"
                                                                        aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog modal-primary"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <center>
                                                                                        <h4 class="modal-title">BORRAR !</h4>
                                                                                    </center>
                                                                                    <button class="close" type="button"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <li class="fa fa-window-close">
                                                                                        </li>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <center><h3><i class="fa fa-exclamation-triangle fa-5x"></i></h3>
                                                                                    <h4>¿Estas seguro que deseas
                                                                                        eliminar la delegación <br> {{$delegacion->deleg}}?</h4>
                                                                                        </center>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button class="btn btn-secondary"
                                                                                        type="button"
                                                                                        data-dismiss="modal">CANCELAR</button>
                                                                                    <form id="logout-form" action="{{ route('delegacion.delete',[$delegacion->slug]) }}" method="POST" >
                                                                                        {{ method_field('PUT') }}
                                                                                        @csrf
                                                                                        <button class="btn btn-danger" type="submit">ELIMINAR</button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>























                                                            </div>
                                                            <div class="card-footer text-muted">
                                                                <div class="form-group text-right">
                                                                    <button type="button" class="btn btn-primary "
                                                                        id="sendMessageButton">EDITAR</button> | 
                                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#primaryModal"
                                                                        id="sendMessageButton">ELIMINAR</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                            
                                                <div>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection