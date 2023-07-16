<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiDataZaragozaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos = Http::get("https://www.zaragoza.es/sede/servicio/catalogo/api.json");
        $servicios = $datos->json("paths");
        return view("api_zaragoza.listado",compact("servicios"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $url = $request->input('servicio');
        $nombre_tabla = $url;
        $url= str_replace('/{id}',"",$url);
        $url = "https://www.zaragoza.es/sede/$url.json";

        $datos = Http::get($url);
        logger("Consultado a $url");


        $filas = $datos->json("result");
        $campos = array_keys($filas[0]);



        return view("api_zaragoza.listado_tabla",compact("campos","nombre_tabla","filas"));
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
