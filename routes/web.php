<?php

use App\Http\Controllers\CarController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cars', [CarController::class, 'index'])->name('cars:index');
Route::get('/cars/add', [CarController::class, 'create'])->name('cars:add');
Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars:show');
Route::post('/cars/{car}', [CarController::class, 'update']);
