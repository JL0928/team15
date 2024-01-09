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

Route::middleware(['auth'])->group(function(){

    Route::get('/', function(){
        return redirect('animations');
    });
    //顯示所有
    Route::get('animations',[AnimationsController::class,'index'])->name('animations.index');
    //顯示單一
    Route::get('animations/springseason',[AnimationsController::class,'springseason'])->name('animations.springseason');
    //顯示單一
    Route::get('animations/summerseason',[AnimationsController::class,'summerseason'])->name('animations.summerseason');
    //顯示單一
    Route::get('animations/fallseason',[AnimationsController::class,'fallseason'])->name('animations.fallseason');
    //顯示單一
    Route::get('animations/winterseason',[AnimationsController::class,'winterseason'])->name('animations.winterseason');
    //選定類別
    Route::post('animations/type', [AnimationsController::class,'type'])->name('animations.type');
    //顯示單一
    Route::get('animations/{id}', [AnimationsController::class,'show'])->where('id', '[0-9]+')->name('animations.show');
    //修改單一
    Route::get('animations/{id}/edit', [AnimationsController::class,'edit'])->where('id', '[0-9]+')->name('animations.edit');
    //修改動畫
    Route::patch('animations/update/{id}', [AnimationsController::class,'update'])->where('id', '[0-9]+')->name('animations.update');
    //儲存動畫
    Route::post('animations/store', [AnimationsController::class,'store'])->where('id', '[0-9]+')->name('animations.store');
    //刪除單一
    Route::delete('animations/delete/{id}', [AnimationsController::class,'destroy'])->where('id', '[0-9]+')->name('animations.destroy');
    //新增表單
    Route::get('animations/create', [AnimationsController::class,'create'])->name('animations.create');

    //顯示所有
    Route::get('companies',[CompaniesController::class,'index'])->name('companies.index');
    //顯示單一
    Route::get('companies/{id}', [CompaniesController::class,'show'])->where('id', '[0-9]+')->name('companies.show');
    //修改單一
    Route::get('companies/{id}/edit', [CompaniesController::class,'edit'])->where('id', '[0-9]+')->name('companies.edit');
    //修改公司
    Route::patch('companies/update/{id}', [CompaniesController::class,'update'])->where('id', '[0-9]+')->name('companies.update');
    //儲存公司
    Route::post('companies/store', [CompaniesController::class,'store'])->where('id', '[0-9]+')->name('companies.store');
    //刪除單一
    Route::delete('companies/delete/{id}', [CompaniesController::class,'destroy'])->where('id', '[0-9]+')->name('companies.destroy');
    //新增表單
    Route::get('companies/create', [CompaniesController::class,'create'])->name('companies.create');

    Route::get('companies/up10years',[CompaniesController::class,'up10years'])->name('companies.up10years');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
