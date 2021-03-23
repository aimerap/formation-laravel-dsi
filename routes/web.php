<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/',         [MainController::class, 'afficheAcceuil'] )->name('accueil');

Route::get('procedure/{param}', [MainController::class, 'afficheProcedure'])->name('procedure')  ;
