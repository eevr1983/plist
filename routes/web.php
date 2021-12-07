<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


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

Route::get('/', [MainController::class, 'index']);
Route::get('/dashboard', [MainController::class, 'dashboard']);
Route::get('/waybill', [MainController::class, 'waybill']);
Route::get('/contract', [MainController::class, 'contract']);
Route::get('/freighter_card', [MainController::class, 'freighter_card']);
Route::get('/memo', [MainController::class, 'memo']);
Route::get('/cars', [MainController::class, 'cars']);
Route::get('/employees', [MainController::class, 'employees']);
Route::get('/organizations', [MainController::class, 'organizations']);
Route::get('/settings', [MainController::class, 'settings']);
Route::get('/support', [MainController::class, 'support']);
Route::get('/cars/{ car? }', [MainController::class, 'car']);
