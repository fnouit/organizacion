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
                                    <i class="fa fa-home"></i> Inicio
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
                                                                style="width: 382px;">Username</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Date registered: activate to sort column ascending"
                                                                style="width: 331px;">Date registered</th>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Role: activate to sort column descending"
                                                                style="width: 158px;" aria-sort="ascending">Role</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="DataTables_Table_0" rowspan="1"
                                                                colspan="1"
                                                                aria-label="Status: activate to sort column ascending"
                                                                style="width: 173px;">Status</th>
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
                                                        <tr role="row" class="odd">
                                                            <td class="">Finlay Alf</td>
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
                                                        <tr role="row" class="even">
                                                            <td class="">Ajith Hristijan</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Alphonse Ivo</td>
                                                            <td>2012/01/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
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
                                                            <td class="">Anton Phunihel</td>
                                                            <td>2012/01/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
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
                                                            <td class="">Bao Gaspar</td>
                                                            <td>2012/01/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
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
                                                            <td class="">Fricis Arieh</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Grahame Miodrag</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Hipólito András</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Hristofor Sergio</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Innokentiy Celio</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Kostandin Warinhari</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Scottie Maximilian</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Sullivan Robert</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Tadhg Griogair</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Thancmar Theophanes</td>
                                                            <td>2012/01/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
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
                                                            <td class="">Theophilus Nala</td>
                                                            <td>2012/03/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-warning">Pending</span>
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
                                                            <td class="">Walerian Khwaja</td>
                                                            <td>2012/01/01</td>
                                                            <td class="sorting_1">Member</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
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
                                                            <td class="">Adam Alister</td>
                                                            <td>2012/01/21</td>
                                                            <td class="sorting_1">Staff</td>
                                                            <td>
                                                                <span class="badge badge-success">Active</span>
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
                                                            <td class="">Bünyamin Kasper</td>
                                                            <td>2012/08/23</td>
                                                            <td class="sorting_1">Staff</td>
                                                            <td>
                                                                <span class="badge badge-danger">Banned</span>
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
                                                            <td class="">Carlito Roffe</td>
                                                            <td>2012/08/23</td>
                                                            <td class="sorting_1">Staff</td>
                                                            <td>
                                                                <span class="badge badge-danger">Banned</span>
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
                                                            <td class="">Chidubem Gottlob</td>
                                                            <td>2012/02/01</td>
                                                            <td class="sorting_1">Staff</td>
                                                            <td>
                                                                <span class="badge badge-danger">Banned</span>
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