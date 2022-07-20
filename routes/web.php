<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\detallecarro;
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
    return view('welcome');
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


Route::get('carros', [CarroController::class, 'index'])->name('carros.index');
Route::get('carros/create', [CarroController::class, 'create'])->middleware('can:carros.create')->name('carros.create');
Route::post('carros', [CarroController::class, 'store'])->name('carros.store');
Route::get('carros/{carros}', [CarroController::class, 'show'])->middleware('can:carros.show')->name('carros.show');
Route::post('carros/{carros}', [CarroController::class, 'store2'])->middleware('can:carros.store2')->name('carros.store2');
Route::put('carros/{carros}', [CarroController::class, 'update'])->middleware('can:carros.update')->name('carros.update');
Route::delete('carros/{carros}', [CarroController::class, 'destroy'])->middleware('can:carros.destroy')->name('carros.destroy');

Route::resource('users',UserController::class)->only(['index','edit','update'])->names('admin.users');
