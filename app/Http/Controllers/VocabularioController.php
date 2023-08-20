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
        //En función del tipo de usuario, mostrar la conrrespondiente vista
        $user = Auth::user();
        return view('vocabulario.' . $user->roles[0]->name);


    }
}
