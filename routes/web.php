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
    return redirect('Animation');
});

Route::get('Animation',[AnimationsController::class,'index'])->name('Animation.index');

Route::get('Company',[CompaniesController::class,'index'])->name('Company.index');