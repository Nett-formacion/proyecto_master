<x-layout.app
    title="Proyectos Master" meta-description="Proyectos de alumnos del master desarrollo web fullstak en  Nettformación promoción 2022">

{{--<div class="flex flex-col justify-between m-2 space-y-2  overflow-auto">--}}
    <h1>
        {{$message ?? "Sin mensaje"}}
    </h1>
<div class="grid mx-10 p-10 gap-4 grid-cols-3 grid-row-auto overflow-auto">
    <x-slot name="nav">
        <a class="btn btn-primary btn-sm  " href="{{route('about')}}">About</a>
        <a class="btn btn-secondary btn-sm " href="{{route('contacta')}}">Contacta</a>
        @auth
            <a class=" btn btn-warning btn-sm " href="{{route('alumnos.index')}}">Alumnos</a>
            <a class=" btn btn-error btn-sm" href="{{route('proyectos')}}">Proyectos</a>
        @endauth
    </x-slot>


    {{--<div class="grid grid-flow-col auto-cols-max justify-between m-2 space-x-42  overflow-auto">--}}
    <div class="card p-5 bg-base-100 shadow-xl image-full">
        <figure><img src="{{asset('/images/laravel_sessions.png')}}" alt="Proyectos" /></figure>
        <div class="card-body">
            <h2 class="card-title">Gestión básica de sesiones</h2>
            <div class="card-actions justify-end">
                <a href="{{route('sessions.index')}}" class="btn btn-primary">
                    Crea, visualiza y borra variables de sesión
                </a>
            </div>
        </div>
    </div>

    <div class="card p-5  bg-base-100 shadow-xl image-full">
        <figure><img src="{{asset('/images/gestion_proyectos_optimizado.png')}}" alt="Proyectos" /></figure>
        <div class="card-body">
            <h2 class="card-title">Gestión de proyectos</h2>
            <p>Consulta proyectos de los alumnos</p>
            <div class="card-actions justify-end">

                <a href="{{route('alumnos.index')}}" class="btn btn-primary"> Verlos ahora(requiere registro)</a>
            </div>
        </div>
    </div>
    <div class="card p-5 bg-base-100 shadow-xl image-full h-full ">
        <figure><img  class =" object-contain" src="{{asset('/images/traductor_optimizado.png')}}" alt="Palabras" /></figure>
        <div class="card-body">
            <h2 class="card-title">Traductor de palabras</h2>
            <p>Prueba a ver tu nivel en los idiomas</p>
            <div class="card-actions justify-end">
                <a href="{{route('vocabulario.index')}}" class="btn btn-primary">Empezar a jugar</a>
            </div>
        </div>
    </div>
    <div class="card p-5 bg-base-100 shadow-xl image-full">
        <figure><img src="{{asset('/images/cronometro.jpg')}}" alt="Proyectos" /></figure>
        <div class="card-body">
            <h2 class="card-title">Cronómetro</h2>
            <p>Gestión de un cronómetro</p>

            <cronometro ></cronometro>

            <div class="card-actions justify-end">
                <button class="btn btn-primary">Verlos ahora(requiere registro)</button>
            </div>
        </div>
    </div>
    <div class="card p-5 bg-base-100 shadow-xl image-full">
        <figure><img height ="100" width="200" src="{{asset('/images/api_dataos_abiertos_zaragoza.png')}}" alt="Proyectos" /></figure>
        <div class="card-body">
            <h2 class="card-title">API</h2>
            <p>{{__('Acceso a datos abiertos')}}</p>


            <div class="card-actions justify-end">
                <a href="{{route("api_zaragoza.index")}}" class="btn btn-primary">API Datos Abiertos de Zaragoza</a>
            </div>
        </div>
    </div>
</div>
</x-layout.app>
