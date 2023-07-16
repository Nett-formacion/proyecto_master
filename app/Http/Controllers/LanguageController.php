<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;


class LanguageController extends Controller
{
    //
    /*MRM 1 estableciendo idioma
Controlador para establecer el idioma
NO ME CUADRA!!!!!!
*/
    public function index($locale){
//        App::setLocale($locale);
        session()->put('locale', $locale);
        logger("idioma ".$locale);
        return Redirect::back();
    }

}
