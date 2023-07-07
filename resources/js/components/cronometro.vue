

<template>
    <div class="border-green-600 border-8  w-1/2">
        <div class=" font-bold italic font-mono text-green-900 text-6xl bg-white flex flex-row justify-center border-8 border-green-600 p-5">
            <div>{{minutos}}:{{segundos}}:{{decimas}}</div>
        </div>
        <div class=" join-item  flex flex-row space-x-3">
            <button @click="start_stop" class="btn btn-primary btn-xs mt-3">{{ label_start_stop }}</button>
            <button @click="reset" class="btn btn-primary btn-xs mt-3">Reset</button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'cronometro',
    data(){
        return{
            minutos:0,
            segundos:0,
            decimas:0,
            funcionando:false,
            label_start_stop:"Start"
        }
    },
    mounted() {
        setInterval(()=>{
            if (this.funcionando){
                this.decimas++;
                if (this.decimas==10){
                    this.decimas=0;
                    this.segundos++;
                    if(this.segundos==60){
                        this.segundos=0;
                        this.minutos++;
                    }
                }
            }

        },100)


    },
    methods:{
      start_stop(){
          console.log("estoy en start/stop");
          this.funcionando=!this.funcionando;
          this.label_start_stop=this.funcionando?"Stop":"Start";
      },
      reset(){
          console.log("estoy en reset");
          this.funcionando=false;
          this.minutos=0;
          this.segundos=0;
          this.decimas=0;
          this.label_start_stop="Start";


      }
    }
}
// Aquí puedes agregar las propiedades, métodos, etc.
</script>
<style scoped>


</style>
