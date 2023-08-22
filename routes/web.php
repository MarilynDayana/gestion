<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;

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

/*
Route::get('/register', function () {
    return view('auth.register');
});
*/

Route::get('/register',[RegisterController::class, 'show']);

Route::get('/register',[RegisterController::class, 'register']);

Route::get('/login',[LoginController::class, 'show']);

Route::get('/login',[LoginController::class, 'login']);





Route::middleware(['auth'])->group(function () {
    Route::get('/task', 'TaskController@index')->name('task.index');
    Route::post('/task', 'TaskController@store')->name('task.store');
    Route::post('/task/{task}', 'TaskController@update')->name('task.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




