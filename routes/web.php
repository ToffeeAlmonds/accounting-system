<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;




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


Route::get('/login', [AuthController::class, 'displayLogin']);


Route::get('/register', [AuthController::class, 'displayRegister']);


Route::get('/dashboard', [AuthController::class, 'displayDashboard']);


Route::post('/submit-register', [AuthController::class, 'register'])->name('submit-register');


Route::post('/submit-login', [AuthController::class, 'login'])->name('submit-login');


