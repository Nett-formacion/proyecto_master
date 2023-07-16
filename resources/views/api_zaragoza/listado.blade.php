<x-layout.app>
    <form class="m-3 w-3/4"  action="{{route("api_zaragoza.store")}}" method='post'>
        @csrf
        <h1 class=" text-center m-3 uppercase text-5xl text-green-900">Listado de servicios disponibles</h1>
        <select class="p-2 text-4xl text-red-700 w-full" name="servicio" id="">
            @foreach($servicios as $servicio =>$contenido)
                <option  class="text-xl text-green-600" value="{{$servicio}}"> {{$contenido['get']['summary']}}  </option>
            @endforeach
        </select>
        <hr />
        <input class ="text-right m-3 btn btn-primary" type="submit" value="Ver Detalles del Servicio">
    </form>


</x-layout.app>
