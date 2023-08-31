<x-layout.app>
    <x-slot name="nav">
        <a class="btn btn-primary btn-sm"  href="{{route('profesores.index')}}"> Profesores</a>
        <a class="btn btn-secondary btn-sm " href="{{route('contacta')}}">Idiomas</a>
        <a class="btn btn-secondary btn-sm " href="{{route('main')}}">Volver</a>
    </x-slot>
        <listado-tabla
            filas_serializadas='@json($filas)'
                        campos_serializados='@json($campos)'
            nombre_tabla="{{$nombre_tabla}}"
        >

        </listado-tabla>


</x-layout.app>
