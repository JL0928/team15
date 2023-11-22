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

Route::get('aompanies',[CompaniesController::class,'index'])->name('companies.index');