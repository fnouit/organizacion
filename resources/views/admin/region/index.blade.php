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
                                    <i class="fa fa-home"></i> <a href="/">Inicio</a> / Regiones
                                </div>
                                <div class="card-body">
                                    <div id="DataTables_Table_0_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table
                                                    class="table table-striped table-bordered datatable dataTable no-footer"
                                                    id="DataTables_Table_0" role="grid"
                                                    aria-describedby="DataTables_Table_0_info"
                                                    style="border-collapse: collapse !important">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Username: activate to sort column ascending"
                                                                style="width: 382px;">#</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Date registered: activate to sort column ascending"
                                                                style="width: 331px;">Nombre</th>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Role: activate to sort column descending"
                                                                style="width: 158px;" aria-sort="ascending">Sede</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Status: activate to sort column ascending"
                                                                style="width: 173px;">Coordinador</th>                                                            
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Status: activate to sort column ascending"
                                                                style="width: 173px;">Configuración</th>                                                            
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($regiones as $key => $region)
                                                        <tr role="row" class="odd">
                                                            <td class="">{{$key+1}}</td>
                                                            <td>{{$region->nombre}}</td>
                                                            <td class="sorting_1">{{$region->sede}}</td>
                                                            <td>
                                                                <span class="">{{$region->coordinador}}</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-success" href="#">
                                                                    <i class="fa fa-search-plus"></i>
                                                                </a>

                                                                <a href="{{ route('region.edit', $region->slug) }}" class="btn btn-primary">

                                                                    <i class="fa fa-edit"></i>
                                                                </a>
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