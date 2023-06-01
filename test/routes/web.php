<?php

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

use App\Http\Controllers\CompanyCRUDController;
 

Route::get('/',[CompanyCRUDController::class,'index'])->name('index');
Route::get('/create',[CompanyCRUDController::class,'cpage'])->name('cpage');
Route::post('/store',[CompanyCRUDController::class,'store'])->name('store');
Route::get('/{id}/delete',[CompanyCRUDController::class,'delete'])->name('delete');
Route::get('/{id}/update',[CompanyCRUDController::class,'update'])->name('update');
Route::post('/{id}/edit',[CompanyCRUDController::class,'edit'])->name('edit');
