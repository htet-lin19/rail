<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RailController;


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

Route::get('/rail', [RailController::class, 'index']);
Route::get('/create', [RailController::class, 'add']);
Route::post('/create', [RailController::class, 'create']);

Route::get('/edit/{id}', [RailController::class, 'edit']);
Route::post('edit/update', [RailController::class, 'update']);

Route::get('delete/{id}', [RailController::class, 'delete']);
