<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/user', function () {
    return view('user.index');
})->name('user.index');


Route::get('/user', [Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/user/store', [Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/create', [Controllers\UserController::class, 'create'])->name('user.create');
Route::get('/user/show/{id}', [Controllers\UserController::class, 'show'])->name('user.show');
Route::post('user/update', [Controllers\UserController::class, 'update']);
Route::delete('/user/destroy/{id}', [Controllers\UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/edit/{id}', [Controllers\UserController::class, 'edit'])->name('user.edit');

Route::get('/gorest', [Controllers\GorestController::class, 'index'])->name('gorest.index');
Route::post('/gorest/store', [Controllers\GorestController::class, 'store'])->name('gorest.store');
Route::get('/gorest/create', [Controllers\GorestController::class, 'create'])->name('gorest.create');
Route::get('/gorest/show/{id}', [Controllers\GorestController::class, 'show'])->name('gorest.show');
Route::post('gorest/update', [Controllers\GorestController::class, 'update']);
Route::delete('/gorest/destroy/{id}', [Controllers\GorestController::class, 'destroy'])->name('gorest.destroy');
Route::get('/gorest/edit/{id}', [Controllers\GorestController::class, 'edit'])->name('gorest.edit');