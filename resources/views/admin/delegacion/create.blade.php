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
                            <i class="fa fa-home"></i> <a href="/">Inicio</a> / <a href="{{route('delegacion')}}">Delegaciones</a> / Nueva
                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <center>
                                                                <strong><h4>CREAR NUEVA DELEGACION</h4></strong>
                                                            </center>
                                                        </div>

                                                        <div class="card-body">
                                                            <form action="{{route('delegacion.store')}}" method="post">
                                                                @csrf
                                                                @if ($errors->any())
                                                                    <div class="alert alert-danger alert-dismissible fade show"
                                                                        role="alert">
                                                                        <h4 class="alert-heading">¡Parece que hay un erro!</h4>
                                                                        <button type="button" class="close" data-dismiss="alert"
                                                                            aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                @endif
                                                                                                                         
                                                              
                                                                <div class="form-row">
                                                                    <div class="form-group">
                                                                        <label for="" style="color:red;" > <strong>* Todos los campos son requeridos.</strong> </label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row ">
                                                                    <label for="colFormLabelLg" class="col-form-label col-md-6 text-right" >
                                                                       <strong> ¿A QUÉ COMITÉ PERTENECE ESTA DELEGACIÓN?</strong></label>
                                                                    <div class="form-group col-md-6">
                                                                        <select id="inputState" 
                                                                            class="form-control{{($errors->first('comite') ? " is-invalid" : "")}}" 
                                                                            name="comite">
                                                                            <option value="" selected disabled>¿SELECCIONA COMITÉ?</option>
                                                                            @foreach($comites as $comite)
                                                                                <option value="{{$comite->id}}">{{$comite->nombre}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <small class="invalid-feedback" v-if="errors.foo">
                                                                            {{$errors->first('comite')}}
                                                                        </small>
                                                                    </div>
                                                                </div><hr>

                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="nomenclatura">
                                                                            <strong>Periodo inicial</strong>
                                                                        </label>
                                                                        <input type="datetime-local"
                                                                            value="{{ date('Y-m-d hh:mm:SS') }}"
                                                                            id="example-datetime-local-input" name="data_in"
                                                                            class="form-control{{($errors->first('data_in') ? " is-invalid" : "")}}">
                                                                            <small class="invalid-feedback" v-if="errors.foo">
                                                                                {{$errors->first('data_in')}}
                                                                            </small>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="nomenclatura">
                                                                            <strong>Periodo final</strong>
                                                                        </label>
                                                                        <input class="form-control{{($errors->first('data_out') ? " is-invalid" : "")}}"
                                                                            type="datetime-local"
                                                                            value="{{ date('Y-m-d') }}"
                                                                            id="example-datetime-local-input" name="data_out">
                                                                            <small class="invalid-feedback" v-if="errors.foo">
                                                                                {{$errors->first('data_out')}}
                                                                            </small>                                                                            
                                                                    </div>
                                                                </div> <hr>

                                                                <div class="form-row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="nomenclatura">
                                                                            <strong>Nomenclatura</strong>
                                                                        </label>
                                                                        <select class="custom-select{{($errors->first('nomenclatura') ? " is-invalid" : "")}}"
                                                                            name="nomenclatura">
                                                                            <option value="" disabled selected>INGRESA NOMENCLATURA DELEGACIONAL</option>
                                                                            @foreach($nomenclaturas as $key => $n)                                                                                
                                                                                <option value="{{ $n->id }}" {{ old('nomenclatura') ==  $n->id ? "selected" : "" }} >{{$n->nomenclatura}}</option>
                                                                            @endforeach
                                                                        </select>   
                                                                        <small class="invalid-feedback" v-if="errors.foo">
                                                                            {{$errors->first('nomenclatura')}}
                                                                        </small>                                                                                                                                         
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="numero">
                                                                                <strong>Número</strong>
                                                                        </label>
                                                                        <input type="text" name="numero" id="numero"
                                                                            class="form-control{{($errors->first('numero') ? " is-invalid" : "")}}"
                                                                            placeholder="NÚMERO DELEGACIONAL"
                                                                            value="{{ old('numero') }}" >   
                                                                            <small class="invalid-feedback" v-if="errors.foo">
                                                                                {{ $errors->first('numero') }}
                                                                            </small>                                                                                                                 
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="sede">
                                                                                <strong>NOMBRE DE LA SEDE</strong>
                                                                        </label>
                                                                        <input type="text" name="sede" id="sede"
                                                                            class="form-control{{($errors->first('sede') ? " is-invalid" : "")}}"
                                                                            placeholder="INGRESA AQUÍ LA SEDE" value="{{old('sede')}}" style="text-transform: uppercase;">
                                                                            <small class="invalid-feedback" v-if="errors.foo" >
                                                                                {{$errors->first('sede')}}
                                                                            </small>
                                                                    </div>                                                                
                                                                </div>

                                                                
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="niveles">
                                                                            <strong>¿CUÁL ES EL NIVEL AL QUE PERTENECE LA DELEGACIÓN?</strong>
                                                                        </label>
                                                                        <select name="nivel" class="custom-select{{($errors->first('nivel') ? " is-invalid" : "")}}"">
                                                                            <option value="SELECCIONA UNO DE LA LISTA" disabled selected></option>
                                                                            @foreach($niveles as $key => $nivel)
                                                                                <option value="{{$nivel->id}}" {{ old('nivel') == $nivel->id ? "selected" : "" }} >{{$nivel->nivel_educativo}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <small class="invalid-feedback" v-if="errors.foo" >
                                                                            {{$errors->first('sede')}}
                                                                        </small>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="regiones">
                                                                            <strong>¿A QUÉ REGIÓN PERTENECE ESTA DELEGACIÓN?</strong>
                                                                        </label>
                                                                        <select name="region" class="custom-select{{($errors->first('region') ? " is-invalid" : "")}}"">
                                                                            <option value="" disabled selected>SELECCIONA REGIÓN</option>
                                                                            @foreach($regiones as $region)
                                                                                <option value="{{$region->id}}" {{ old('region') == $region->id ? "selected" : "" }}> {{$region->nombre}} - {{$region->sede}}</option>
                                                                            @endforeach                                                                            
                                                                        </select>
                                                                    </div>
                                                                </div> <hr>


                                                                <div class="rounded-pill" style="
                                                                    font-weight:700;
                                                                    color: rgb(47, 53, 58);
                                                                    background-color: #e4e7ea;
                                                                    padding: 6px;
                                                                    margin-bottom: 14px;">
                                                                    Domicilio delegacional
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="calle">
                                                                        <strong>INGRESA EL NOMBRE DE LA CALLE</strong></label>
                                                                        <input type="text" name="calle" id="calle" 
                                                                            class="form-control{{($errors->first('calle') ? " is-invalid" :"")}}" 
                                                                            placeholder="AQUÍ EL NOMBRE" value="{{old('calle')}}">
                                                                            <small class="invalid-feedback" v-if="errors.foo">
                                                                                {{$errors->first('calle')}}
                                                                            </small>
                                                                    </div>
                                                                    <div class="form-group col-md-2">
                                                                        <label for="num">
                                                                        <strong>NÚMERO</strong></label>
                                                                        <input type="text" name="num" id="num" 
                                                                        class="form-control{{($errors->first('num') ? " is-invalid" :"")}}" 
                                                                        placeholder="INT/EXT"value="{{old('num')}}">
                                                                            <small class="invalid-feedback" v-if="errors.foo" >
                                                                                {{$errors->first('num')}}
                                                                            </small>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="colonia">
                                                                        <strong>COLONIA</strong></label>
                                                                        <input type="text" name="colonia" id="colonia" 
                                                                        class="form-control{{($errors->first('colonia') ? " is-invalid" :"")}}" 
                                                                        placeholder="¿CÚAL ES SU COLONIA?"value="{{old('colonia')}}">
                                                                            <small class="invalid-feedback" v-if="errors.foo" >
                                                                                {{$errors->first('colonia')}}
                                                                            </small>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="form-group col-md-4">
                                                                        <label for="cp">
                                                                        <strong>C.P.</strong></label>
                                                                        <input type="text" name="cp" id="cp" 
                                                                        class="form-control{{($errors->first('cp') ? " is-invalid" :"")}}" 
                                                                        placeholder="TU CÓDIGO POSTAL"value="{{old('cp')}}">
                                                                            <small class="invalid-feedback" v-if="errors.foo" >
                                                                                {{$errors->first('cp')}}
                                                                            </small>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="telefono">
                                                                        <strong>TELÉFONO</strong></label>
                                                                        <input type="text" name="telefono" id="telefono" 
                                                                        class="form-control{{($errors->first('telefono') ? " is-invalid" :"")}}" 
                                                                        placeholder="NÚMERO TELEFÓNICO" value="{{old('telefono')}}">
                                                                            <small class="invalid-feedback" v-if="errors.foo" >
                                                                                {{$errors->first('telefono')}}
                                                                            </small>
                                                                    </div>
                                                                    <div class="form-group col-md-4">
                                                                        <label for="ciudad">
                                                                        <strong>CIUDAD</strong></label>
                                                                        <input type="text" name="ciudad" id="ciudad" 
                                                                        class="form-control{{($errors->first('ciudad') ? " is-invalid" :"")}}" 
                                                                        placeholder="CIUDAD" value="{{old('ciudad')}}">
                                                                            <small class="invalid-feedback" v-if="errors.foo" >
                                                                                {{$errors->first('ciudad')}}
                                                                            </small>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="row">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="municipio">
                                                                        <strong>MUNICIPIO</strong></label>
                                                                        <input type="text" name="municipio" id="municipio" 
                                                                        class="form-control{{($errors->first('municipio') ? " is-invalid" :"")}}" 
                                                                        placeholder="MUNICIPIO" value="{{old('municipio')}}">
                                                                            <small class="invalid-feedback" v-if="errors.foo" >
                                                                                {{$errors->first('municipio')}}
                                                                            </small>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="cp">
                                                                        <strong>Entidad Federativa</strong></label>
                                                                        <input type="text" class="form-control" placeholder="VERACRUZ" readonly>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary "
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