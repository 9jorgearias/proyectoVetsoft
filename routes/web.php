<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<<<<<<< HEAD
Route::get('clientes', function () {
    $mensaje = 'vista principal clientes';
    return $mensaje;
    });
=======
Route::get('/usuarios', [UserController::class, 'index'])->name('ListUser');
>>>>>>> d3b17bf2074af23b961cc8f972fcfab8f04825a1
