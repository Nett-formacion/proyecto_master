<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('sessions.sessions');

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        logger ($request->input());

        if ($request->input("Crear")){
            $nombre =$request->input("nombre");
            $valor =$request->input("valor");
            session([$nombre=>$valor]);
        }
        if ($request->input("Borrar")){
            $sessions_var =$request->input("session_var");

            foreach ($sessions_var as $nombre=> $valor) {
                session()->forget($nombre);
                logger("Borrando $nombre");
            }

        }
        return view ('sessions.sessions');
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
