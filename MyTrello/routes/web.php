<?php

use App\Http\Controllers\DataUserController;
use App\Http\Controllers\MyCardController;
use App\Http\Controllers\MyColumnController;
use App\Http\Controllers\MyTableController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['verified'])->name('dashboard');

require __DIR__.'/auth.php';
