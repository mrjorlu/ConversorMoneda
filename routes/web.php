<?php

use App\Http\Controllers\aut\loginController;
use App\Http\Controllers\aut\register;
use App\Http\Controllers\Divisa\divisaController;
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
    return view('auth.login');
});
Route::resource('register', register::class);

Route::resource('login',loginController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('logout', [loginController::class, 'destroy'])->middleware(['auth'])->name('logout');

Route::resource('divisa',divisaController::class)->middleware(['auth']);
