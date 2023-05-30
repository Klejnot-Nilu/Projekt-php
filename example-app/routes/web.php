<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Smutek/52165/people', [PeopleController::class, 'index']);
Route::get('/Smutek/52165/show/{id}', [PeopleController::class, 'show']);
Route::get('/Smutek/52165/destroy/{id}', [PeopleController::class, 'destroy']);
Route::put('/Smutek/52165/update/{id}', [PeopleController::class, 'update']);
Route::put('/Smutek/52165/store', [PeopleController::class, 'store']);