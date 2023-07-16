import {createApp} from 'vue';
import cronometro from './components/cronometro.vue';
import listadoTabla from "./components/listadoTabla.vue";
import dropdownLangs from "./components/dropdownLangs.vue";

createApp( {

    components:{
        cronometro,
        listadoTabla,
        dropdownLangs,
    }
}).mount("#app")

