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
Route::get('/', function () {
    return redirect('animations');
});

Route::get('animations', [AnimationsController::class, 'index'])->name('animations.index');

Route::get('animations/springseason',[AnimationsController::class,'springseason'])->name('animations.springseason');
//顯示單一
Route::get('animations/summerseason',[AnimationsController::class,'summerseason'])->name('animations.summerseason');
//顯示單一
Route::get('animations/fallseason',[AnimationsController::class,'fallseason'])->name('animations.fallseason');
//顯示單一
Route::get('animations/winterseason',[AnimationsController::class,'winterseason'])->name('animations.winterseason');
//顯示單一

Route::get('animations/{id}', [AnimationsController::class, 'show'])->where('id', '[0-9]+')->name('animations.show');

Route::get('animations/{id}/edit', [AnimationsController::class, 'edit'])->where('id', '[0-9]+')->name('animations.edit');

Route::delete('animations/delete/{id}', [AnimationsController::class, 'destroy'])->where('id', '[0-9]+')->name('animations.destroy');

Route::get('animations/create', [AnimationsController::class, 'create'])->name('animations.create');

Route::patch('animations/update/{id}', [AnimationsController::class, 'update'])->where('id', '[0-9]+')->name('animations.update');

Route::post('animations/store', [AnimationsController::class,'store'])->where('id', '[0-9]+')->name('animations.store');


Route::get('companies', [CompaniesController::class, 'index'])->name('companies.index');

Route::get('companies/{id}', [CompaniesController::class, 'show'])->where('id', '[0-9]+')->name('companies.show');

Route::get('companies/{id}/edit', [CompaniesController::class, 'edit'])->where('id', '[0-9]+')->name('companies.edit');

Route::delete('companies/delete/{id}', [CompaniesController::class, 'destroy'])->where('id', '[0-9]+')->name('companies.destroy');

Route::get('companies/create', [CompaniesController::class, 'create'])->name('companies.create');

Route::patch('companies/update/{id}', [CompaniesController::class, 'update'])->where('id', '[0-9]+')->name('companies.update');

Route::post('companies/store', [CompaniesController::class,'store'])->where('id', '[0-9]+')->name('companies.store');