<template>
    <button @click="open" class="w-1/12 dropdown dropdown-bottom">
        <div class="flex flex-row w-2/3 justify-between
        space-y-2 items-center bg-slate-200 p-1 px-2 rounded-full font-semibold ">
            {{ lang_label }}
            <svg
                class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802"></path>
            </svg>
        </div>
        <ul v-if="isOpen" tabindex="0" class="dropdown-content   menu p-1
                 bg-base-100   rounded  w-full">
            <li v-for="(lang,index) in  langs">
                <button @click="select_lang(lang.lang_name, index, $event)">
                    {{ lang.lang_name }}
                </button>
            </li>
        </ul>
    </button>
</template>
<script>
export default {
    name: "dropdownLangs",
    props: ['list_of_langs', 'lang_code'],
    data() {
        return {
            langs: Object, //listado de lenguajes deserializado
                           //Objeto con el contenido de config/language.php
            isOpen: false, // controlar la apertura del dropdown
            lang_label: String

        }
    },
    created() {
        console.log(this.list_of_langs);
        this.langs = JSON.parse(this.list_of_langs);
        console.log(this.langs); //Para ver la estructura
        console.log(this.lang_code); //Para ver el contenido
        this.lang_label = this.langs[this.lang_code].lang_name;
    },
    methods: {
        open() {
            this.isOpen = !this.isOpen;
        },
        select_lang(lang, locale, event) {
            this.lang_label = lang;
            this.isOpen = false; // Alternar el valor de isOpen
            let url = window.location.href;
            let host = url.split('/')[2];
            window.location="http://"+host+`/lang/`+locale;
            event.stopPropagation(); // Detener la propagación del evento click


            // window.location=url
        },
    }
}
</script>

<style scoped>

</style>
