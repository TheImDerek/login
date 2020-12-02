<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/verificacion', 'Controlador@verificacion');

Route::get('/formulario', 'Controlador@login');