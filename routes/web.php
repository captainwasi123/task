<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;

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

Route::get('/', [mainController::class, 'index']);
Route::get('firstStep/{id}', [mainController::class, 'firstStep']);
Route::post('skipStep', [mainController::class, 'skipStep']);
Route::post('nextStep', [mainController::class, 'nextStep']);
Route::post('getResult', [mainController::class, 'getResult']);
