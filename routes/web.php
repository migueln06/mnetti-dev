<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Ruta temporal para ejecutar migraciones desde el navegador
Route::get('/init-db', function() {
    try {
        Artisan::call('migrate:fresh', ['--force' => true]);
        return "Base de datos inicializada con éxito.";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});