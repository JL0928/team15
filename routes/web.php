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
//顯示所有Animation資料
Route::get('animations',[AnimationsController::class,'index'])->name('animations.index');
//顯示單一Animation資料
Route::get('animations/{id}',[AnimationsController::class,'show'])->where('id','[0-9]+')->name('animations.show');
//修改單一Animation資料
Route::get('animations/{id}/edit',[AnimationsController::class,'edit'])->where('id','[0-9]+')->name('animations.edit');
//刪除單一Animation資料
Route::delete('animations/delete/{id}',[AnimationsController::class,'destroy'])->where('id','[0-9]+')->name('animations.destroy');


//顯示所有Company資料
Route::get('companies',[CompaniesController::class,'index'])->name('companies.index');
//顯示單一Company資料
Route::get('companies/{id}',[CompaniesController::class,'show'])->where('id','[0-9]+')->name('companies.show');
//修改單一Company資料
Route::get('companies/{id}/edit',[CompaniesController::class,'edit'])->where('id','[0-9]+')->name('companies.edit');Route::get('animations/{id}/edit',[AnimationsController::class,'edit'])->where('id','[0-9]+')->name('animations.edit');
//刪除單一Company資料
Route::delete('companies/delete/{id}',[CompaniesController::class,'destroy'])->where('id','[0-9]+')->name('companies.destroy');
