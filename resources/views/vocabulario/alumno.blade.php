<x-layout.app
    title="Juego Vocabulario" meta-description="Juego para trabajar el vocabulario en diferentes idiomas con palabras">
    {{--<div class="flex flex-col justify-between m-2 space-y-2  overflow-auto">--}}
    <x-slot name="nav">
        <a class="btn btn-primary btn-sm"  href="{{route('profesores.index')}}"> Jugar</a>
        <a class="btn btn-secondary btn-sm " href="{{route('contacta')}}">Ver mis resultados</a>
        <a class="btn btn-secondary btn-sm " href="{{route('contacta')}}">Volver</a>

    </x-slot>
     <div class="w-3/12 flex flex-col  ">
        <div class="chat chat-start w-max  ">
            <div class="chat-image  avatar">
                <div class="w-10 ">
                    <img  src="/images/vocabulario/alumno.png" alt="Alumno"/>
                </div>
            </div>
            <div class="chat-bubble chat-bubble-success">Soy Admin, Aquí crea profesores</div>
        </div>
        <div class="chat chat-end  w-max">
            <div class="chat-image  avatar">
                <div class="w-10 rounded-full">
                    <img src="/images/vocabulario/alumno.png" alt="Alumno" />
                </div>
            </div>
            <div class="chat-bubble chat-bubble-info">Puedes crear idiomas nuevos</div>
        </div>
        <div class="chat chat-start  w-max">
            <div class="chat-image  avatar">
                <div class="w-10 rounded-full">
                    <img src="/images/vocabulario/alumno.png" alt="Alumno"/>
                </div>
            </div>
            <div class="chat-bubble chat-bubble-error">Revisa los alumnos</div>
        </div>
        <div class="chat chat-end  w-max">
            <div class="chat-image  avatar">
                <div class="w-10 rounded-full">
                    <img src="/images/vocabulario/alumno.png" alt="Alumno"/>
                </div>
            </div>
            <div class="chat-bubble chat-bubble-warning">Mira las palabras que hay y grupos</div>
        </div>
    </div>
    </x-layout.app>
