<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SwotController;

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

Route::get('/', [SwotController::class, 'index'])->name('index');
Route::post('/strength', [SwotController::class, 'strength'])->name('strength');
Route::post('/weakness', [SwotController::class, 'weakness'])->name('weakness');
Route::post('/opportunity', [SwotController::class, 'opportunity'])->name('opportunity');
Route::post('/threats', [SwotController::class, 'threats'])->name('threats');

