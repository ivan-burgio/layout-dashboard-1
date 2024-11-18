<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/propiedades/crear', [PageController::class, 'propiedadesCrear']);
Route::get('/vendedores/crear', [PageController::class, 'vendedoresCrear']);
Route::get('/blogs/crear', [PageController::class, 'blogsCrear']);
