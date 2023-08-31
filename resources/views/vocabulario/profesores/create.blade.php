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

        <form action="{{route("profesores.store")}}" method="post"
              class="space-y-4 ">
            @csrf
            Hola

            <div class="flex justify-end w-full">
                <label class="input-group flex justify-end w-full" for="name"><span class="w-48">{{__('Nombre')}}</span>
                    <input name="name" type="text" placeholder="{{__('Nombre')}}"
                           value="{{old("name")}}"
                           class="input input-bordered input-primary w-full max-w-xs"/>
                </label>

            </div>
            @error("name")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror

            <label class="input-group flex justify-end w-full" for="surname"><span
                    class="w-48">{{__('Apellido')}}</span>
                <input name="surname" type="text" placeholder="{{__('Apellido')}}"
                       value="{{old("surname")}}"
                       class="input input-bordered input-primary w-full max-w-xs"/>
            </label>

            @error("surname")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror

            <label class="input-group flex justify-end w-full" for="email"><span class="w-48">{{__('Email')}}</span>
                <input name="email" type="email" placeholder="{{__('Email')}}"
                       value="{{old("email")}}"
                       class="input input-bordered input-primary w-full  max-w-xs"/>
            </label>

            @error("email")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror

            <label class="input-group flex justify-end w-full" for="password"><span
                    class="w-48">{{__('Password')}}</span>
                <input name="password" type="password" placeholder="{{__('Password')}}"
                       class="input input-bordered input-primary w-full max-w-xs"/>
            </label>
            @error("password")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror


            <label class="input-group flex justify-end w-full" for="password_confirmation"><span
                    class="w-48">{{__('Password')}}</span>
                <input name="password_confirmation" type="password" placeholder="{{__('Confirmación Password ')}}"
                       class="input input-bordered input-primary w-full max-w-xs"/>
            </label>
            @error("password_confirmation")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror

            <label class="input-group flex justify-end w-full" for="nick"><span class="w-48">{{__('Nick')}}</span>
                <input name="nick" type="text" placeholder="nick"
                       value="{{old("nick")}}"
                       class="input input-bordered input-primary w-full max-w-xs"/>
            </label>
            @error("nick")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror


            <label class="input-group flex justify-end w-full" for="department"><span
                    class="w-48">{{__('Departamento')}}</span>
                <input name="department" type="text" placeholder="{{__('Departamento')}}"
                       value="{{old("department")}}"
                       class="input input-bordered input-primary w-full max-w-xs"/>
            </label>
            @error("department")
            <div class="text-red-600 text-xs"> {{$message}} </div>
            @enderror

            <button type="submit" class=" btn btn-primary">Guardar</button>
        </form>
    </div>

</x-layout.app>
