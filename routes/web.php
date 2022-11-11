<?php

use Illuminate\Support\Facades\Route;


Route::get('/a', function () {
    return view('plantilla.esqueleto');
});

Route::get('/', function () {
    return view('informacion1');
});

Route::get('/past_progressive', function () {
    return view('informacion2');
});

Route::get('/past_perfect', function () {
    return view('informacion3');
});