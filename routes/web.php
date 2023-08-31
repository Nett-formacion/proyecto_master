<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ApiDataZaragozaController;
use App\Http\Controllers\VocabularioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


*/


Route::get('/', function () {
    return view('main');
})->name("main");


Route::resource('profesores',\App\Http\Controllers\ProfesorController::class);

Route::view("about","nav.about")->name("about");
Route::get("alumnos/paginate",[AlumnoController::class,"get_paginate"] );

Route::resource("alumnos", AlumnoController::class);


//Route::get("alumnos",[\App\Http\Controllers\AlumnosControler::class,"index"])
//    ->name("alumnos")
//    ->middleware("auth");;
Route::view("proyectos","nav.proyectos")
    ->name("proyectos")
    ->middleware("auth");

Route::view("contacta","nav.contacta")
    ->name("contacta");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("lang/{locale}", [LanguageController::class,"index"])->name('lang');

require __DIR__.'/auth.php';



Route::get("/sessions", [SessionController::class,'index'])->name("sessions.index");
Route::post("/sessions/store", [SessionController::class,'store'])->name("sessions.store");
//Route::get("/sessions", [SessionController::class,"form_sessions"])->name('sessions');
//Route::post("sessions/sessions", [SessionController::class,"storage_sessions"])->name('sessions_storage');

//Pruebas
Route::get("pruebas",\App\Http\Controllers\PruebasController::class);

Route::get("/api_zaragoza", [ApiDataZaragozaController::class,'index']);
Route::resource("/api_zaragoza", \App\Http\Controllers\ApiDataZaragozaController::class);
Route::post("/api_zaragoza/edit", [\App\Http\Controllers\ApiDataZaragozaController::class,"edit"]);

Route::get("/vocabulario/index",[VocabularioController::class,"index"])
    ->name("vocabulario.index")
    ->middleware("auth");

