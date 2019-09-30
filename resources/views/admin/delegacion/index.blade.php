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
                                    <div id="DataTables_Table_0_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div style="margin: 0px 0px 25px 0px;" >
                                                    <a href="{{route('delegacion.create')}}" class="btn btn-primary">
                                                        <i class="icon-note"></i> &nbsp Nueva Delegación
                                                    </a>
                                                </div>


                                                <table
                                                    class="table table-striped table-bordered datatable dataTable no-footer"
                                                    id="DataTables_Table_0" role="grid"
                                                    aria-describedby="DataTables_Table_0_info"
                                                    style="border-collapse: collapse !important">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="2"
                                                                aria-label="Username: activate to sort column ascending"
                                                                >INFORMACIÓN</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Date registered: activate to sort column ascending"
                                                                >DELEGACIÓN</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Date registered: activate to sort column ascending"
                                                                >SEDE</th>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Role: activate to sort column descending"
                                                                 aria-sort="ascending">NIVEL EDUCATIVO</th>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Role: activate to sort column descending"
                                                                 aria-sort="ascending">REGIÓN</th>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Role: activate to sort column descending"
                                                                 aria-sort="ascending">SECRETARIO GENERAL</th>                                                                                                               
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($delegaciones as $key => $delegacion)
                                                        <tr role="row" class="odd">
                                                            <td class="">{{$key+1}}</td>
                                                            <td class="">
                                                                <a href="{{ route('delegacion.show', $delegacion->slug) }}" class="btn btn-outline-primary">
                                                                    <i class="icon-eye"></i>&nbsp; Mostrar
                                                                </a>
                                                            </td>



                                                            <td>{{$delegacion->deleg}}</td>
                                                            <td>{{$delegacion->sede}}</td>
                                                            <td>{{$delegacion->nivel->nivel_educativo}}</td>
                                                            <td>
                                                                {{$delegacion->region->nombre}} - 
                                                                {{$delegacion->region->sede}}
                                                            </td>
                                                            <td>
                                                            </td>


                                                        </tr> 
                                                        @endforeach
                                                    </tbody>
                                                </table>
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