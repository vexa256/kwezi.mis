<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DeleteController;

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


Route::get('/', [MainController::class, 'Home'])->name('Home');

Route::get('dashboard', [MainController::class, 'AdminCP'])->name('dashboard')->middleware(['auth']);
Route::get('AdminCP', [MainController::class, 'AdminCP'])->name('AdminCP')->middleware(['auth']);



Route::get('/MassDelete/{id}/{TableName}', [DeleteController::class, 'MassDelete'])->name('MassDelete')->middleware(['auth']);
Route::get('/', [MainController::class, 'Home'])->name('Home');

Route::post('CreateAdmin', [MainController::class, 'CreateAdmin'])->name('CreateAdmin');
Route::get('ManageAdmins', [MainController::class, 'ManageAdmins'])->name('ManageAdmins')->middleware(['auth']);
Route::post('UpdateAdmin', [MainController::class, 'UpdateAdmin'])->name('UpdateAdmin')->middleware(['auth']);


require __DIR__.'/auth.php';
