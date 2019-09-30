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
                            <i class="fa fa-home"></i> <a href="/">Inicio</a> / <a
                                href="{{route('region')}}">Regiones</a> / Editar
                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form action="{{route('region.update',[$region->slug])}}" method="post">
                                            @csrf
                                            {{ method_field('PUT') }}

                                            <div class="d-flex justify-content-center">
                                                <div class="col-sm-6">

                                                    <div class="card">
                                                        <div class="card-header">
                                                            <strong>Formulario de Edición </strong>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="clearfix" style="padding-bottom: 1cm;">
                                                                <div class="float-right">
                                                                    <a href="{{ route('region') }}"> Regresar &nbsp <i
                                                                            class="fa fa-sign-out"></i> </a>
                                                                </div>
                                                            </div>
                                                            @if ($errors->any())
                                                            <div class="alert alert-danger alert-dismissible fade show"
                                                                role="alert">
                                                                <h4 class="alert-heading">¡Parece que hay un erro!</h4>
                                                                <hr>
                                                                <p>
                                                                    <ul>
                                                                        @foreach ($errors->all() as $error)
                                                                        <li>{{ $error }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </p>
                                                                <button type="button" class="close" data-dismiss="alert"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            @endif
                                                            <div class="form-group row">
                                                                <label for="nombre"
                                                                    class="col-md-4 col-form-label text-md-right">NOMBRE</label>
                                                                <div class="col-md-6">
                                                                    <input id="nombre" type="text"
                                                                        class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}"
                                                                        name="nombre" value="{{ $region->nombre }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="sede"
                                                                    class="col-md-4 col-form-label text-md-right">SEDE</label>
                                                                <div class="col-md-6">
                                                                    <input id="sede" type="text"
                                                                        class="form-control{{ $errors->has('sede') ? ' is-invalid' : '' }}"
                                                                        name="sede" value="{{ $region->sede }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="coordinador"
                                                                    class="col-md-4 col-form-label text-md-right">COORDINADOR</label>
                                                                <div class="col-md-6">
                                                                    <input id="coordinador" type="text"
                                                                        class="form-control{{ $errors->has('coordinador') ? ' is-invalid' : '' }}"
                                                                        name="coordinador"
                                                                        value="{{ $region->coordinador }}">
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group">
                                                                <center>
                                                                    <button class="btn btn-primary mb-1" type="button"
                                                                        data-toggle="modal"
                                                                        data-target="#primaryModal">Actualizar</button>


                                                                    <div class="modal fade" id="primaryModal"
                                                                        tabindex="-1" role="dialog"
                                                                        aria-labelledby="myModalLabel"
                                                                        aria-hidden="true" style="display: none;">
                                                                        <div class="modal-dialog modal-primary"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">Actualizar
                                                                                    </h4>
                                                                                    <button class="close" type="button"
                                                                                        data-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <li class="fa fa-window-close">
                                                                                        </li>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <h4>¿Estas seguro que deseas
                                                                                        actualizar la información?</h4>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button class="btn btn-secondary"
                                                                                        type="button"
                                                                                        data-dismiss="modal">Cerrar</button>
                                                                                    <button class="btn btn-primary"
                                                                                        type="submit">Guardar
                                                                                        Cambios</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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