<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/propiedades/crear', [PageController::class, 'propiedadesCrear']);
Route::get('/propiedades/actualizar/{slug}', [PageController::class, 'propiedadesActualizar']);
Route::get('/vendedores/crear', [PageController::class, 'vendedoresCrear']);
Route::get('/vendedores/actualizar/{slug}', [PageController::class, 'vendedoresActualizar']);
Route::get('/blogs/crear', [PageController::class, 'blogsCrear']);
Route::get('/blogs/actualizar/{slug}', [PageController::class, 'blogsActualizar']);
