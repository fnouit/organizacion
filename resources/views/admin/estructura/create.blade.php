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
                                href="{{route('estructura')}}">Estructuras</a> / Nueva estructura
                        </div>
                        <div class="card-body">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">








                                    <div class="col-lg-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <div class="text-center">
                                                    <h4>FORMULARIO DE REGISTRO</h4>
                                                </div>
                                                <form class="form-horizontal">


                                                    <div class="form-row">
                                                        <div class="form-group col-md-3">
                                                            <label for="regiones">
                                                                <strong>¿A QUÉ REGIÓN PERTENECE ESTA
                                                                    DELEGACIÓN?</strong>
                                                            </label>
                                                            <select name="region"
                                                                class="custom-select{{($errors->first('region') ? " is-invalid" : "")}}"">
                                                                <option value="" disabled selected>SELECCIONA REGIÓN</option>
                                                                @foreach($regiones as $region)
                                                                    <option value=" {{$region->id}}"
                                                                {{ old('region') == $region->id ? "selected" : "" }}>
                                                                {{$region->nombre}} - {{$region->sede}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="regiones">
                                                                <strong>¿SELECCIONA DELEGACIÓN?</strong>
                                                            </label>
                                                            <select name="delegacion"
                                                                class="custom-select{{($errors->first('delegacion') ? " is-invalid" : "")}}"">
                                                                <option value="" disabled selected>SELECCIONA DELEGACIÓN</option>                                                                                                                                           
                                                            </select>
                                                        </div>
                                                        <div class=" form-group col-md-3">
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
                                                        <div class="form-group col-md-3">
                                                            <label for="nomenclatura">
                                                                <strong>Periodo final</strong>
                                                            </label>
                                                            <input
                                                                class="form-control{{($errors->first('data_out') ? " is-invalid" : "")}}"
                                                                type="datetime-local" value="{{ date('Y-m-d') }}"
                                                                id="example-datetime-local-input" name="data_out">
                                                            <small class="invalid-feedback" v-if="errors.foo">
                                                                {{$errors->first('data_out')}}
                                                            </small>
                                                        </div>
                                                    </div>

                                                    <hr>



                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                            <label for="delegacion">
                                                                <strong>DELEGACIÓN</strong>
                                                            </label>
                                                            <input class="form-control" name="delegacion"
                                                                id="delegacion" type="text"
                                                                placeholder="D-I-1 ACAYUCAN (FORANEAS)" readonly>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="comite">
                                                                <strong>COMITÉ DELEGACIONAL</strong>
                                                            </label>
                                                            <input class="form-control" name="comite" id="comite"
                                                                type="text" placeholder="ACTIVOS" readonly>

                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="regione">
                                                                <strong>REGIÓN</strong>
                                                            </label>
                                                            <input class="form-control" name="region" id="region"
                                                                type="text" placeholder="REGIÓN XI - MINATITLÁN"
                                                                readonly>
                                                        </div>
                                                    </div>
                                                    <hr>

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
                                                            <input class="form-control" name="calle" id="calle"
                                                                type="text" placeholder="PRIVADA DE ADALBERTO TEJEDA"
                                                                readonly>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="num">
                                                                <strong>NÚMERO</strong></label>
                                                            <input class="form-control" name="num" id="num" type="text"
                                                                placeholder="158-A" readonly>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="colonia">
                                                                <strong>COLONIA</strong></label>
                                                            <input class="form-control" name="colonia" id="colonia"
                                                                type="text" placeholder="MIRADORES" readonly>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="cp">
                                                                <strong>C.P.</strong></label>
                                                            <input class="form-control" name="cp" id="cp" type="text"
                                                                placeholder="69584" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label for="telefono">
                                                                <strong>NÚMERO TELEFÓNICO</strong></label>
                                                            <input class="form-control" name="telefono" id="telefono"
                                                                type="text" placeholder="2521148796" readonly>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="ciudad">
                                                                <strong>CIUDAD</strong></label>
                                                            <input class="form-control" name="ciudad" id="ciudad"
                                                                type="text" placeholder="MINATITLÁN" readonly>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="municipio">
                                                                <strong>MUNICIPIO</strong></label>
                                                            <input class="form-control" name="municipio" id="municipio"
                                                                type="text" placeholder="MINATITLÁN" readonly>
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="estado">
                                                                <strong>ESTADO</strong></label>
                                                            <input type="text" class="form-control" name="estado"
                                                                id="estado" placeholder="VERACRUZ" readonly>
                                                        </div>
                                                    </div>

                                                    <hr>




                                                    <div class="row">
                                                        <div class="col">
                                                            <ul class="nav nav-pills mb-1" id="pills-tab"
                                                                role="tablist">
                                                                <li class="nav-item"><a class="nav-link active"
                                                                        id="pills-home-tab" data-toggle="pill"
                                                                        href="#pills-home" role="tab"
                                                                        aria-controls="pills-home"
                                                                        aria-selected="true">SECRETARÍA GENERAL</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                        id="pills-profile-tab" data-toggle="pill"
                                                                        href="#pills-profile" role="tab"
                                                                        aria-controls="pills-profile"
                                                                        aria-selected="false">SECRETARÍA DE ORGANIZACIÓN</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                        id="pills-contact-tab" data-toggle="pill"
                                                                        href="#pills-contact" role="tab"
                                                                        aria-controls="pills-contact"
                                                                        aria-selected="false">SECRETARÍA DE TRABAJO Y CONFLICTOS</a></li>
                                                                <li class="nav-item"><a class="nav-link active"
                                                                        id="pills-home-tab" data-toggle="pill"
                                                                        href="#pills-home" role="tab"
                                                                        aria-controls="pills-home"
                                                                        aria-selected="true">SECRETARÍA DE FINANZAS</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                        id="pills-profile-tab" data-toggle="pill"
                                                                        href="#pills-profile" role="tab"
                                                                        aria-controls="pills-profile"
                                                                        aria-selected="false">SECRETARÍA DE PREVISIÓN Y ASISTENCIA SOCIAL</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                        id="pills-contact-tab" data-toggle="pill"
                                                                        href="#pills-contact" role="tab"
                                                                        aria-controls="pills-contact"
                                                                        aria-selected="false">SECRETARÍA DE ESCALAFÓN Y PROMOCIÓN</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                        id="pills-contact-tab" data-toggle="pill"
                                                                        href="#pills-contact" role="tab"
                                                                        aria-controls="pills-contact"
                                                                        aria-selected="false">SECRETARÍA DE ORIENTACIÓN IDEOLÓGICA SINDICAL</a></li>



            
            
            
            
            
            
            




                                                            </ul>
                                                            <div class="tab-content" id="pills-tabContent">
                                                                <div class="tab-pane fade active show" id="pills-home"
                                                                    role="tabpanel" aria-labelledby="pills-home-tab">
                                                                    Raw denim you probably haven't heard of them jean
                                                                    shorts Austin. Nesciunt tofu stumptown aliqua, retro
                                                                    synth master cleanse. Mustache cliche tempor,
                                                                    williamsburg carles vegan helvetica. Reprehenderit
                                                                    butcher
                                                                    retro keffiyeh dreamcatcher synth. Cosby sweater eu
                                                                    banh mi, qui irure terry richardson ex squid.
                                                                    Aliquip
                                                                    placeat salvia cillum iphone. Seitan aliquip quis
                                                                    cardigan american apparel, butcher voluptate nisi
                                                                    qui.
                                                                </div>
                                                                <div class="tab-pane fade" id="pills-profile"
                                                                    role="tabpanel" aria-labelledby="pills-profile-tab">
                                                                    Food truck fixie locavore, accusamus mcsweeney's
                                                                    marfa nulla single-origin coffee squid. Exercitation
                                                                    +1
                                                                    labore velit, blog sartorial PBR leggings next level
                                                                    wes anderson artisan four loko farm-to-table craft
                                                                    beer twee. Qui photo booth letterpress, commodo enim
                                                                    craft beer mlkshk aliquip jean shorts ullamco ad
                                                                    vinyl cillum PBR. Homo nostrud organic, assumenda
                                                                    labore aesthetic magna delectus mollit. Keytar
                                                                    helvetica
                                                                    VHS salvia yr, vero magna velit sapiente labore
                                                                    stumptown. Vegan fanny pack odio cillum wes anderson
                                                                    8-bit, sustainable jean shorts beard ut DIY ethical
                                                                    culpa terry richardson biodiesel. Art party
                                                                    scenester
                                                                    stumptown, tumblr butcher vero sint qui sapiente
                                                                    accusamus tattooed echo park.
                                                                </div>
                                                                <div class="tab-pane fade" id="pills-contact"
                                                                    role="tabpanel" aria-labelledby="pills-contact-tab">
                                                                    Etsy mixtape wayfarers, ethical wes anderson tofu
                                                                    before they sold out mcsweeney's organic lomo retro
                                                                    fanny pack lo-fi farm-to-table readymade. Messenger
                                                                    bag gentrify pitchfork tattooed craft beer, iphone
                                                                    skateboard locavore carles etsy salvia banksy hoodie
                                                                    helvetica. DIY synth PBR banksy irony. Leggings
                                                                    gentrify squid 8-bit cred pitchfork. Williamsburg
                                                                    banh mi whatever gluten-free, carles pitchfork
                                                                    biodiesel
                                                                    fixie etsy retro mlkshk vice blog. Scenester cred
                                                                    you probably haven't heard of them, vinyl craft beer
                                                                    blog stumptown. Pitchfork sustainable tofu synth
                                                                    chambray yr.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


























                                                    <div class="form-group">
                                                        <label class="col-form-label" for="prependedInput">Prepended
                                                            text</label>
                                                        <div class="controls">
                                                            <div class="input-prepend input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text">@</span></div>
                                                                <input class="form-control" id="prependedInput"
                                                                    size="16" type="text">
                                                            </div>
                                                            <p class="help-block">Here's some help text</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="appendedInput">Appended
                                                            text</label>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <input class="form-control" id="appendedInput" size="16"
                                                                    type="text">
                                                                <div class="input-group-append"><span
                                                                        class="input-group-text">.00</span></div>
                                                            </div><span class="help-block">Here's more help
                                                                text</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label"
                                                            for="appendedPrependedInput">Append and prepend</label>
                                                        <div class="controls">
                                                            <div class="input-prepend input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text">$</span></div>
                                                                <input class="form-control" id="appendedPrependedInput"
                                                                    size="16" type="text">
                                                                <div class="input-group-append"><span
                                                                        class="input-group-text">.00</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label" for="appendedInputButton">Append
                                                            with button</label>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <input class="form-control" id="appendedInputButton"
                                                                    size="16" type="text"><span
                                                                    class="input-group-append">
                                                                    <button class="btn btn-secondary"
                                                                        type="button">Go!</button></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label"
                                                            for="appendedInputButtons">Two-button append</label>
                                                        <div class="controls">
                                                            <div class="input-group">
                                                                <input class="form-control" id="appendedInputButtons"
                                                                    size="16" type="text"><span
                                                                    class="input-group-append">
                                                                    <button class="btn btn-secondary"
                                                                        type="button">Search</button>
                                                                    <button class="btn btn-secondary"
                                                                        type="button">Options</button></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <button class="btn btn-primary" type="submit">Save
                                                            changes</button>
                                                        <button class="btn btn-secondary" type="button">Cancel</button>
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
</main>
@endsection