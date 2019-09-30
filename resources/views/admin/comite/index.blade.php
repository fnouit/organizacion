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
                            <i class="fa fa-home"></i> <a href="/">Inicio</a> / Comité
                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <center>
                                            <div class="col-md-8">
                                                <div class="card-deck mb-3 text-center">

                                                    @foreach ($comites as $comite)
                                                        <div class="card mb-4 shadow-sm">
                                                            <div class="card-header">
                                                                <h4 class="my-0 font-weight-normal">{{$comite->nombre}}</h4>
                                                            </div>
                                                            <div class="card-body">
                                                                <img class="navbar-brand-full" src="img/brand/sygnet.svg" width="100"  alt="CoreUI Logo">


                                                                <button type="button" class="btn btn-lg btn-block btn-primary">
                                                                Mostrar &nbsp <i class="fa fa-chevron-right"></i> 
                                                                 
                                                                </button>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </center>
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