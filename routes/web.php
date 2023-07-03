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

Route::get('/strength/delete/{id}', [SwotController::class, 'strength_delete'])->name('strength_delete');
Route::get('/weakness/delete/{id}', [SwotController::class, 'weakness_delete'])->name('weakness_delete');
Route::get('/opportunity/delete/{id}', [SwotController::class, 'opportunity_delete'])->name('opportunity_delete');
Route::get('/threats/delete/{id}', [SwotController::class, 'threats_delete'])->name('threats_delete');

