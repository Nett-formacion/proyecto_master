import {createApp} from 'vue';
import cronometro from './components/cronometro.vue';
import listadoTabla from "./components/listadoTabla.vue";
import listadoTabla2 from "./components/listadoTabla2.vue";
import listadoTablaNoPagination from "./components/listadoTablaNoPagination.vue";
import dropdownLangs from "./components/dropdownLangs.vue";

createApp( {

    components:{
        cronometro,
        listadoTabla,
        listadoTabla2,
        dropdownLangs,
        listadoTablaNoPagination,
    }
}).mount("#app")

