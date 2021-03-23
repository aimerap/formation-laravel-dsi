<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.front-office.welcome');
})->name('accueil');

Route::get('procedure', function () {
    return view('pages.front-office.procedure');
})->name('procedure')  ;
