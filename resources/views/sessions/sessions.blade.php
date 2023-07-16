<x-layout.app
    title="Proyectos Master"
    meta-description="Proyectos de alumnos del master desarrollo web fullstak en  Nettformación promoción 2022">
    <div class="flex flex-row  space-x-8">
        <form action="{{route("sessions.store")}}" method="post">
            @csrf
            <table class="border border-4 border-green-800  table  w-1/3 table-zebra-zebra table-pin.cols">
                <caption class="text-4xl text-red-600">
                    Variables de Sesión
                </caption>
                <thead class="text-red-600 text-xl text-center h-8">
                <tr>
                    <th>Borrar</th>
                    <th>Nombre</th>
                    <th>Valor</th>
                </tr>
                </thead>
                <tbody class="text-blue-600 text-xl text-center h-8">
                @foreach(session()->all() as $nombre =>$valor)
                    <tr>
                        @php
                            $valor = is_array($valor)? json_encode($valor):$valor;
                        @endphp
                        <th><input type="checkbox" name="session_var[{{$nombre}}]" value="{{$valor}}" id="">
                        <th>{{$nombre}}</th>
                        <th>{{$valor}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <input class="btn btn-secondary " type="submit" value="Borrar" name="Borrar">
        </form>
        <div class="w-2/3">
            <h1 class="text-4xl text-red-600">Formulario para operar con sesiones </h1>

            <form action="{{route('sessions.store')}}" method="post"
                  class="border border-4 border-green-800 p-3 flex flex-col space-y-3 justify-start align-content-start">
                @csrf
                <label for="nombre">Nombre de variable </label>
                <input class="input input-primary input-bordered w-full max-w-xs" type="text" name="nombre" id="nombre">
                <label for="nombre">Valor de variable </label>
                <input class="input input-primary input-bordered w-full max-w-xs" type="text" name="valor" id="valor">
                <input class="btn btn-primary btn-sm" name="Crear" type="submit" value="Crear">
            </form>
        </div>
    </div>

</x-layout.app>
