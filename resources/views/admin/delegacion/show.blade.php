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
                                                                    <strong>DIRECTORIO COMITE DELEGACIONAL</strong>
                                                                </center>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <strong>DELEGACIÓN:&nbsp&nbsp&nbsp</strong>
                                                                        {{$delegacion->deleg}}
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <strong>SEDE:&nbsp&nbsp&nbsp</strong>
                                                                        {{$delegacion->sede}}
                                                                        
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <strong>REGIÓN:&nbsp&nbsp&nbsp</strong>
                                                                        {{$delegacion->region->nombre}} - 
                                                                        {{$delegacion->region->sede}}
                                                                        
                                                                    </div>
                                                                </div> <hr>
<!--                                                                 <div class="row">
                                                                    <div class="col-md-8 text-center justify-content-center" style="border: 1px solid #c8ced3;
    background-color: #f0f3f5;
    padding: 10px 0px;">
                                                                        <strong>PERIODO SINDICAL:&nbsp&nbsp&nbsp</strong>
                                                                        25/05/2019 AL 25/05/2023
                                                                    </div>
                                                                </div> 




                                                                <div class="row d-flex justify-content-center bd-highlight mb-3"style="border: 1px solid #c8ced3;    background-color: #f0f3f5;    padding: 4px 0px;">
                                                                    <div class="p-2 bd-highlight">
                                                                    <strong>PERIODO SINDICAL:&nbsp&nbsp&nbsp</strong>
                                                                        25/05/2019 AL 25/05/2023
                                                                    </div>

                                                                </div> <hr>-->

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <center>
                                                                        <strong>PERIODO SINDICAL:&nbsp&nbsp&nbsp</strong>
                                                                        DEL 25/05/2019 AL 25/05/2023</center>
                                                                    </div>
                                                                </div> <hr>


                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <strong>CALLE Y NÚMERO:&nbsp&nbsp&nbsp</strong>
                                                                        ANDADOR JAZMÍN #205-A
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <strong>COLONIA:&nbsp&nbsp&nbsp</strong>
                                                                        BUENA VISTA
                                                                        &nbsp&nbsp&nbsp<strong>C.P:&nbsp&nbsp&nbsp</strong>
                                                                        98547
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <strong>CIUDAD Y MUNICIPIO:&nbsp&nbsp&nbsp</strong>
                                                                        PAPANTLA, VERACRUZ.
                                                                        
                                                                        
                                                                    </div>
                                                                </div> <hr

                                                            </div>
                                                            <div class="card-footer">
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