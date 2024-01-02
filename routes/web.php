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
//刪除單一Animation資料
Route::delete('animations/delete/{id}',[AnimationsController::class,'destroy'])->where('id','[0-9]+')->name('animations.destroy');
//新增Animation表單
Route::get('animations/create',[AnimationsController::class,'create'])->name('animations.create');
//修改Animation表單
Route::get('animations/{id}/edit',[AnimationsController::class,'edit'])->where('id','[0-9]+')->name('animations.edit');
//修改動畫資料
Route::patch('animations/update/{id}',[AnimationsController::class,'update'])->where('id','[0-9]+')->name('animations.update');
//儲存新增動畫資料
Route::post('animations/store',[AnimationsController::class,'store'])->where('id','[0-9]+')->name('animations.store');
//顯示四季動畫
Route::get('animations/spring_season',[AnimationsController::class,'spring_season'])->name('animations.spring_season'); //春
Route::get('animations/summer_season',[AnimationsController::class,'summer_season'])->name('animations.summer_season'); //夏
Route::get('animations/fall_season',[AnimationsController::class,'fall_season'])->name('animations.fall_season');       //秋
Route::get('animations/winter_season',[AnimationsController::class,'winter_season'])->name('animations.winter_season'); //冬




//顯示所有Company資料
Route::get('companies',[CompaniesController::class,'index'])->name('companies.index');
//顯示單一Company資料
Route::get('companies/{id}',[CompaniesController::class,'show'])->where('id','[0-9]+')->name('companies.show');
//刪除單一Company資料
Route::delete('companies/delete/{id}',[CompaniesController::class,'destroy'])->where('id','[0-9]+')->name('companies.destroy');
//新增Company表單
Route::get('companies/create',[CompaniesController::class,'create'])->name('companies.create');
//修改Company表單
Route::get('companies/{id}/edit',[CompaniesController::class,'edit'])->where('id','[0-9]+')->name('companies.edit');
//修改公司資料
Route::patch('companies/update/{id}',[CompaniesController::class,'update'])->where('id','[0-9]+')->name('companies.update');
//儲存新增公司資料
Route::post('companies/store',[CompaniesController::class,'store'])->where('id','[0-9]+')->name('companies.store');
//顯示10年以上的公司
Route::get('companies/up10years',[CompaniesController::class,'up10years'])->name('companies.up10years');
