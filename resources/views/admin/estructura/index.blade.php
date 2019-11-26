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
                                    <i class="fa fa-home"></i> <a href="/">Inicio</a> / Estructuras
                                </div>
                                <div class="card-body">
                                    <div id="DataTables_Table_0_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12">

                                                <div style="margin: 0px 0px 25px 0px;" >
                                                    <a href="{{route('estructura.create')}}" class="btn btn-primary">
                                                        <i class="icon-note"></i> &nbsp Nuevo Comité Delegacional
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
                                                                colspan="1"
                                                                aria-label="ID: activate to sort column ascending"
                                                                style="width: 382px;">ID</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="DELEGACION: activate to sort column ascending"
                                                                style="width: 382px;">DELEGACION</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="SEDE: activate to sort column ascending"
                                                                style="width: 331px;">SEDE</th>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="REGIÓN: activate to sort column descending"
                                                                style="width: 158px;" aria-sort="ascending">REGIÓN</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="SECRETARÍA GENERAL: activate to sort column ascending"
                                                                style="width: 173px;">SECRETARÍA GENERAL</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Actions: activate to sort column ascending"
                                                                style="width: 341px;">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="">Adinah Ralph</td>
                                                            <td class="">Adinah Ralph</td>
                                                            <td>2012/06/01</td>
                                                            <td class="sorting_1">Admin</td>
                                                            <td>
                                                                <span class="badge badge-dark">Inactive</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-success" href="#">
                                                                    <i class="fa fa-search-plus"></i>
                                                                </a>
                                                                <a class="btn btn-info" href="#">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a class="btn btn-danger" href="#">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="">Bernhard Shelah</td>
                                                            <td class="">Bernhard Shelah</td>
                                                            <td>2012/06/01</td>
                                                            <td class="sorting_1">Admin</td>
                                                            <td>
                                                                <span class="badge badge-dark">Inactive</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-success" href="#">
                                                                    <i class="fa fa-search-plus"></i>
                                                                </a>
                                                                <a class="btn btn-info" href="#">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a class="btn btn-danger" href="#">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="">Dederick Mihail</td>
                                                            <td class="">Dederick Mihail</td>
                                                            <td>2012/06/01</td>
                                                            <td class="sorting_1">Admin</td>
                                                            <td>
                                                                <span class="badge badge-dark">Inactive</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-success" href="#">
                                                                    <i class="fa fa-search-plus"></i>
                                                                </a>
                                                                <a class="btn btn-info" href="#">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a class="btn btn-danger" href="#">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="">Felice Arseniy</td>
                                                            <td class="">Felice Arseniy</td>
                                                            <td>2012/02/01</td>
                                                            <td class="sorting_1">Admin</td>
                                                            <td>
                                                                <span class="badge badge-dark">Inactive</span>
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-success" href="#">
                                                                    <i class="fa fa-search-plus"></i>
                                                                </a>
                                                                <a class="btn btn-info" href="#">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a class="btn btn-danger" href="#">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
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