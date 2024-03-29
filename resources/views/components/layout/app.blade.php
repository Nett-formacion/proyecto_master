<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content=" {{$metaDescription ?? "Información de proyectos de alumnos NettFormacion master en desarrollo web"}}">
    <title>{{$title??"Proyectos"}}</title>
    @vite(["./resources/css/app.css","./resources/js/app.js" ])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

</head>

<body>
<div id="app">
    <x-layout.header class="h-15hv"/>
    <x-layout.nav class="h-15hv">
        {{$nav}}
                    <a class="btn btn-primary btn-sm"  href="{{route('profesores.index')}}"> Crear profesor</a>
                    <a class="btn btn-secondary btn-sm " href="{{route('contacta')}}">Volver</a>
    </x-layout.nav>

    <main class="h-70vh
    bg-gradient-to-r from-main_left via-red-400 to-main_right
     flex flex-row justify-center ">
        {{$slot}}
    </main>
    <x-layout.footer class="h-5hv"/>
</div>
</body>
</html>
