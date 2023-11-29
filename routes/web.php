<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimationsController;
use App\Http\Controllers\CompaniesController;



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

Route::get('/', function(){
    return redirect('animations');
});

Route::get('animations',[AnimationsController::class,'index'])->name('animations.index');
Route::get('animations/{id}', [AnimationsController::class,'show'])->where('id', '[0-9]+')->name('animations.show');
Route::get('animations/{id}/edit', [AnimationsController::class,'edit'])->where('id', '[0-9]+')->name('animations.edit');
Route::get('companies',[CompaniesController::class,'index'])->name('companies.index');
Route::get('companies/{id}', [CompaniesController::class,'show'])->where('id', '[0-9]+')->name('companies.show');
Route::get('companies/{id}/edit', [CompaniesController::class,'edit'])->where('id', '[0-9]+')->name('companies.edit');