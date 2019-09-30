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
                            <i class="fa fa-home"></i> <a href="/">Inicio</a> / Delegaciones
                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8">
                                                    <div class="card">

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
                                                        <div class="card-body">
                                                            <form action="{{route('delegacion.store')}}" method="post">
                                                                @csrf
                                                                <div class="form-group ">
                                                                    <label for="nomenclatura">
                                                                        <strong>Nomenclatura</strong>
                                                                    </label>
                                                                    <select class="custom-select" name="nomenclatura">
                                                                        <option value="" disabled selected>INGRESA NOMENCLATURA DELEGACIONAL </option>
                                                                        @foreach($nomenclaturas as $n)
                                                                        <option value="{{$n->id}}">{{$n->nomenclatura}}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="form-group mb-3">
                                                                    <label for="numero">
                                                                        <strong>Número</strong>
                                                                    </label>
                                                                    <input type="text" name="numero" id="numero"
                                                                        class="form-control"
                                                                        placeholder="NÚMERO DELEGACIONAL"
                                                                        value="{{ old('numero') }}" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="sede">
                                                                        <strong>Sede</strong>
                                                                    </label>
                                                                    <input type="text" name="sede" id="sede"
                                                                        class="form-control"
                                                                        placeholder="NOMBRE DE LA DELEGACIÓN" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="niveles">
                                                                        <strong>Nivel Educativo</strong>
                                                                    </label>
                                                                    <select class="custom-select" name="nivel" required>
                                                                        <option value="" disabled selected>
                                                                            ¿CUÁL ES EL NIVEL AL QUE PERTENECE LA DELEGACIÓN?
                                                                        </option>
                                                                        @foreach($niveles as $nivel)
                                                                        <option value="{{$nivel->id}}">
                                                                            {{$nivel->nivel_educativo}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="regiones">
                                                                        <strong>Región</strong>
                                                                    </label>
                                                                    <select class="custom-select" name="region"
                                                                        required>
                                                                        <option value="" disabled selected>
                                                                        A QUÉ REGIÓN PERTENECE ESTA DELEGACIÓN </option>
                                                                        @foreach($regiones as $region)
                                                                        <option value="{{$region->id}}">
                                                                            {{$region->nombre}} - {{$region->sede}}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <button type="submit"
                                                                        class="btn btn-primary "
                                                                        id="sendMessageButton">Crear Nuevo</button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection