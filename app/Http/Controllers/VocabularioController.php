<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Ramsey\Uuid\v1;

class VocabularioController extends Controller
{
    //
    public function index()
    {

        //MRM obtener el usuario actualmente conectado
        $user = Auth::getUser();

        $rol = $user->roles[0]->name;

        return view('vocabulario.' . $user->roles[0]->name);


    }
}
