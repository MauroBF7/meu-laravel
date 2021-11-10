<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;


Route::resource('/livros',LivroController::class);

Route::get('/livros',[LivroController::class,'index']);

