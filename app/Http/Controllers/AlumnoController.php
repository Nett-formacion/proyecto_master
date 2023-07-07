<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Arr;

class AlumnoController extends Controller
{
    public function get_paginate(){

        $alumnos  =Alumno::paginate(5);
        $page = Request::get('page')??1;
        logger("-".$page."-");
        return response($alumnos);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::paginate(5);
        $page = Request::get('page')??1;
//        return view("alumnos.listado", compact("alumnos","page"));
        //


        $alumno = new Alumno();

        //Una opción
//        $campos = array_keys($alumnos[0]->getAttributes());

//        //Otra opcion
//        $tabla_name = $alumno->getTable();
//        $campos = Schema::getConnection()->getSchemaBuilder()->getColumnListing($tabla_name);
//        dd($campos);

        //Nos quedamos con esta que es lo que queremos visualizar
        $campos = (new Alumno())->getFillable();

        //Añadimos el nombre de la clave
        //        $campos = array_merge(["id"],$campos);
        //Por si la claver tiene otro nombre
        $clave = (new Alumno())->getKeyName();
        $campos = array_merge([$clave],$campos);

        logger("Valores de campos ",$campos);



        $filas =$alumnos;
        $nombre_tabla="Alumnos";
        $page=0;
        logger ($filas);

        return view ("alumnos.listado", compact ("campos","filas","nombre_tabla","page"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = Request::get('page');
        return view("alumnos.create",compact('page'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {

        $page = Request::get('page');
        $alumno = new Alumno($request->input());
        $alumno->saveOrFail();
        return redirect(route('alumnos.index',compact("page")));
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
        $page=Request::get('page');
        return view ("alumnos.edit", compact("alumno","page"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        //
        $page = Request::get("page");
        $nuevos_datos_alumno = $request->input();
        $alumno->update($nuevos_datos_alumno);

        return redirect (route("alumnos.index",['page'=>$page]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        $alumnos = Alumno::paginate(5);
        logger ($alumnos);
        return response()->json($alumnos);

//        return redirect (route("alumnos.index"));




        //
    }
}
