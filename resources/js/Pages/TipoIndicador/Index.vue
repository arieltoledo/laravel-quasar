<template>
    <app-layout>
        <q-page padding>
            <div class="row">
                <div class="col-6">
                    <q-card class="col q-pa-sm q-ma-md">
                        <q-table
                            title="Tipos de Indicador"
                            :rows="tipos"
                            :columns="columns"
                        >
                            <template v-slot:body-cell-actions="props">
                                <q-td :props="props">
                                    <q-btn dense round push ripple flat color="primary" icon="visibility"></q-btn>
                                    <q-btn dense round push ripple flat color="secondary" icon="edit"></q-btn>
                                    <q-btn dense round push ripple flat color="negative" icon="delete"></q-btn>
                                </q-td>
                            </template>    
                        </q-table>
                    </q-card>    
                </div>
                 <div class="col-6">
                    <div class="col-12">  
                        <q-card class="q-pa-md q-ma-md">
                            <div class="text-h6">Tipo de Indicador</div>
                            <div class="q-mt-md">
                                <q-input 
                                    class="q-mt-md" 
                                    type="text" 
                                    v-model="form.nombre" 
                                    outlined 
                                    label="Nombre"
                                    bottom-slots
                                    :error="hasError"
                                >
                                    <template v-slot:error>
                                       {{errors.nombre}}
                                    </template>
                                </q-input>
                                <q-input class="q-mt-sm" type="textarea" v-model="form.descripcion" outlined label="Descripcion" />
                                <q-separator></q-separator>
                            </div>
                            <div class="q-mt-md" style="text-align: right">
                                <q-btn @click="submit()" float-right outline color="primary" label="Guardar"></q-btn>
                            </div>                        
                        </q-card>
                    </div>            
                 </div>     
            </div>        
        </q-page>
    </app-layout>    
</template>

<script>
import AppLayout from '@/Layouts/MainLayout.vue'
import { Inertia } from '@inertiajs/inertia'

export default ({
    components: {
        AppLayout,
    },
    props:{
        tipos:Array,
        errors: Object
    },
    data () {
        return {
            form: {
                nombre: '',
                descripcion: ''
            },
            hasError: false,
            columns: [
                {
                    name: 'id',
                    required: true,
                    label: 'Id',
                    align: 'left',
                    field: row => row.id,
                    format: val => `${val}`,
                    sortable: true
                },
                {
                    name: 'nombre',
                    required: true,
                    label: 'Nombre',
                    align: 'left',
                    field: row => row.nombre,
                    format: val => `${val}`,
                    sortable: true
                },
                 { name: 'actions', label: 'Accciones', field: '', align: 'center' }
            ]
        }
    },
    methods: {
        submit () {
            Inertia.post('/indicadores/tipos', this.form)
        }
    },
    watch: {
        errors: function () {
            this.hasError = true
        }
    }
})
</script>
<style scoped>
</style>