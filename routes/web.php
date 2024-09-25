<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('app');
});
Route::get('/cli', function () {
    return view('cliente');
});
Route::get('/produ', function () {
    return view('producto');
});
Route::get('/detacat', function () {
    return view('categoria');
});
