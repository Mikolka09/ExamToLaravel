<?php

use App\Http\Controllers\DataUserController;
use App\Http\Controllers\MyCardController;
use App\Http\Controllers\MyColumnController;
use App\Http\Controllers\MyTableController;
use App\Http\Controllers\Auth\ExpiredPasswordController;
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
Route::resource('tables', MyTableController:: class);
Route::resource('columns', MyColumnController:: class);
Route::resource('cards', MyCardController:: class);
Route::resource('data-users', DataUserController:: class);



Route::get('password/expired', [ExpiredPasswordController::class, 'expired'])
    ->name('password.expired');

Route::post('password/expired', [ExpiredPasswordController::class, 'postExpired'])
    ->name('password.postExpired');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
