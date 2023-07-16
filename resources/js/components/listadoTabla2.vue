<template>
    <div class="flex flex-col space-y-4">
        <button @click="add" class="btn btn-primary">Nuevo {{ nombre_tabla }}</button>
        <div class="overflow-x-auto">
            <table class="table table-xs table-zebra-zebra table-pin-rows table-pin.cols">
                <caption>{{ nombre_tabla }}</caption>
                <thead>
                <tr>
                    <th v-for="campo in campos" :key="campo">
                        <button class="btn btn-sm" @click="ordenar(campo)">
                            {{ campo }}
                            <svg v-if="ascendente[campo]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                 class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5"/>
                            </svg>
                            <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor"
                                 class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                            </svg>
                        </button>
                    </th>
                    <th colspan="2">Opciones</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="fila in filas">
                        <th v-for="valor in fila">
                            {{ valor }}
                        </th>
                        <th>
                            <!--Editar-->
                            <button @click="editar(fila.id ?? '')" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor"
                                     class="w-6 h-6 hover:text-blue-700 text-blue-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                                </svg>
                            </button>
                        </th>
                    </tr>


                </tbody>
            </table>
            <hr>

        </div>
    </div>
</template>

<script>


export default {
    name: "listado-tabla2",

    props: ['filas_serializadas', 'campos_serializados', 'nombre_tabla'],
    data() {
        return {
            filas: Object,
            campos: [],
            ascendente: {},
        }
    },
    created() {
        this.filas = JSON.parse(this.filas_serializadas);
        this.campos = JSON.parse(this.campos_serializados);
        this.campos.forEach((campo) => {
            this.ascendente[campo] = true;
        });
        console.log ("filas "+this.filas);
        console.log ("filas "+this.filas_serializadas);
        console.log ("campos "+this.campos);
    },

    methods: {
        editar(id) {
            if (id !='')
                id="/id";
            let url = "https://zaragoza.es/sede/"+this.nombre_tabla+id;

            // Accede a los valores de los parámetros
            window.location = url + "/" + id + "/edit";
        },

        ordenar(campo) {
            this.ascendente[campo] = !this.ascendente[campo];
            this.filas.sort((a, b) => {
                if (a[campo] > b[campo])
                    return this.ascendente[campo] ? 1 : -1;
                if (a[campo] < b[campo])
                    return this.ascendente[campo] ? -1 : 1;
                if (a[campo] == b[campo])
                    return 0;
                0
            });



        }
    }

}

</script>

<style scoped>

</style>
