<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use App\Models\Profesor;
use App\Models\User;
use Database\Seeders\RolesSeeder;
use Illuminate\Support\Facades\Auth;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        //quiero obtener el rol de cada usuario para visualizarlo
        $users = User::with('roles:name')->paginate(5);
        $users->each(function ($user) {
            $user->role = $user->roles->first()->name;
            unset($user->roles);
        }
        );



        $campos = (new User())->getFillable();

        //Añadimos el nombre de la clave
        //        $campos = array_merge(["id"],$campos);
        //Por si la clave tiene otro nombre
        $clave = (new User())->getKeyName();
        $campos = array_merge([$clave], $campos);
        $campos = array_merge($campos, ["role"]);
        //  unset ($campos[array_search("password",$campos)]);
        $campos = array_filter($campos, fn($campo)=>$campo!="password");
        foreach ($campos as $campo)
            $campos2[]=$campo;
        $campos = $campos2;

        //// está bien indexado, faltaría el índice del elemento password
        logger("Valores de campos ", $campos);
        $filas = $users;
        $nombre_tabla = "Profesor";
        $page = 0;
        return view('vocabulario.profesores.listado' , compact("campos", "filas", "nombre_tabla", "page"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $page = \Request::get("page");
        return view ("vocabulario.profesores.create",compact("page"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        //
    }
}
