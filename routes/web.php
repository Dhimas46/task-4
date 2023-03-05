<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
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
Route::get('/', function()
{
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'auth')->middleware('guest');
    Route::get('/logout', 'logout')->middleware('auth');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index');
});

Route::controller(TamuController::class)->group(function () {
    Route::get('tamu/', 'index');
    Route::post('/tambah-tamu', 'store');
    Route::put('/update-tamu/{id}', 'update');
    Route::get('/delete-tamu/{id}', 'delete');
});
