<template>
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
                                                <tr role="row" class="odd" v-for="region in regiones" :key="region.id">
                                                    <td >1</td>
                                                    <td v-text="region.nombre"></td>
                                                    <td v-text="region.sede" ></td>
                                                    <td v-text="region.coordinador"></td>
                                                    <td>
                                                        <button @click="abrirModal(region)" type="button" class="btn btn-primary" data-toggle="modal"
                                                            data-target=".docs-example-modal-lg"><i class="fa fa-edit"></i></button>
                                                    </td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                        <hr>
                                        <div class="modal fade docs-example-modal-lg" tabindex="-1" role="dialog"
                                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <form @submit.prevent="abrirModal(region)">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR REGIÓN{{nombre}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- inicio cuerpo modal -->
                                                            <div class="form-group row">
                                                                <label for="nombre"
                                                                    class="col-md-4 col-form-label text-md-right">NOMBRE</label>
                                                                <div class="col-md-6">
                                                                    <input v-model="nombre" id="nombre" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="sede"
                                                                    class="col-md-4 col-form-label text-md-right">SEDE</label>
                                                                <div class="col-md-6">
                                                                    <input v-model="sede" id="sede" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="coordinador"
                                                                    class="col-md-4 col-form-label text-md-right">COORDINADOR</label>
                                                                <div class="col-md-6">
                                                                    <input v-model="coordinador" id="coordinador" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <!-- fin cuerpo modal -->                                                        
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <button type="button" class="btn btn-primary">Guardar Cambios</button>
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
</template>

<script>
    export default {
        data() {
            return {
                nombre : '',
                sede : '',
                coordinador : '',                    
                regiones : [],
                tituloModal : '',
                numLista : 0
            }
        },
        created() {
            this.obtenerRegiones();
        },
        methods: {
            obtenerRegiones() {
                var urlRegiones = '/getRegiones';
                axios.get(urlRegiones).then(response => {
                    this.regiones = response.data
                })
                .catch( function (error) {
                    console.log(erro)
                });
            },
            abrirModal(data=[]) {
                let me=this; 
                this.tituloModal = "ACTUALIZAR " + data['nombre'];
                this.nombre = data['nombre'];
                this.sede = data['sede'];
                this.coordinador = data['coordinador'];
                console.log(data);
            },
            cerrarModal() {
                
            }          
        },
        mounted() {
            // console.log('Component mounted.')
            this.obtenerRegiones();
            this.abrirModal();
        }
    }
</script>
