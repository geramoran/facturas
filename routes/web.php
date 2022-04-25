<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('index');
});

Route::post('/compra', [ClienteController::class, 'compra'])->name('Compra');
Route::get('/createFacturas', [AdminController::class, 'createFacturas'])->name('GenerarFacturas');
Route::get('/detalle/{id}', [AdminController::class, 'detalle'])->name('Detalle');
