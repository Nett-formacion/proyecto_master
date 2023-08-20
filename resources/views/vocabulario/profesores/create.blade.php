<x-layout.app>
    <x-slot name="nav">
        <a class="btn btn-info btn-sm " href="{{route('contacta')}}">{{__("Volver")}}</a>
        <a class="btn btn-accent btn-sm " href="{{route('contacta')}}">{{__("Cancelar")}}</a>
    </x-slot>
    <div class=" flex flex-col justify-center items-center">
        <h1 class=" text-4xl text-green-700">Datos Nuevo Profesor</h1>
        {{--    @if ($errors->any())--}}
        {{--        @foreach($errors->all() as $error)--}}
        {{--            <div class="text-red-600 text-xs">{{$error}}</div>--}}
        {{--        @endforeach--}}
        {{--    @endif--}}

        <form action="{{route("alumnos.store",['page'=>$page])}}" method="post"
              class="space-y-4 ">
            @csrf

<div class = "flex justify-end w-full">
    <label class="input-group flex justify-end w-full" for="nombre"><span class="w-48">{{__('Nombre')}}</span>
                <input name="name" type="text" placeholder="nombre"
                       value="{{old("nombre")}}"
                       class="input input-bordered input-primary w-full max-w-xs"/>
            </label>

</div>
            @error("name")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror

            <label class="input-group flex justify-end w-full" for="surname"><span class="w-48">{{__('Apellido')}}</span>
                <input name="surname" type="text" placeholder="surname"
                       value="{{old("surname")}}"
                       class="input input-bordered input-primary w-full max-w-xs"/>
            </label>

            @error("surname")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror

            <label class="input-group flex justify-end w-full" for="email"><span class="w-48">{{__('Email')}}</span>
                <input name="email" type="email" placeholder="email"
                       value="{{old("email")}}"
                       class="input input-bordered input-primary w-full  max-w-xs"/>

            </label>

            @error("email")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror

            <label class="input-group flex justify-end w-full" for="password"><span class="w-48">{{__('Password')}}</span>
                <input name="password" type="password" placeholder="password"
                       class="input input-bordered input-primary w-full max-w-xs"/>
            </label>
            @error("password")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror

            <label class="input-group flex justify-end w-full" for="nick"><span class="w-48">{{__('Nick')}}</span>
                <input name="email" type="text" placeholder="nick"
                       value="{{old("nick")}}"
                       class="input input-bordered input-primary w-full max-w-xs"/>
            </label>
            @error("nick")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror



            <label class="input-group flex justify-end w-full" for="departement"><span class="w-48">{{__('Departamento')}}</span>
                <input name="departement" type="text" placeholder="departement"
                       value="{{old("departement")}}"
                       class="input input-bordered input-primary w-full max-w-xs"/>
            </label>
            @error("departement")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror

            <button type="submit" class=" btn btn-primary">Guardar</button>
        </form>
    </div>

</x-layout.app>
