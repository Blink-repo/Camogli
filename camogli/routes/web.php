<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\itemController;

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


Route::group(['prefix' => 'category', 'as' => 'category.'], function (){
    Route::get('/',[categoryController::class,'index'])->name('index');
    Route::post('/store',[categoryController::class,'store']);
    Route::get('/create',[categoryController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [categoryController::class, 'destroy'])->name('delete');
    Route::put('/update/{id}', [categoryController::class, 'update'])->name('update');
    Route::get('/edit/{id}', [categoryController::class, 'edit'])->name('edit');
});

Route::group(['prefix' => 'item', 'as' => 'item.'], function (){
    Route::get('/',[itemController::class,'index'])->name('index');
    Route::post('/store',[itemController::class,'store']);
    Route::get('/create',[itemController::class, 'create'])->name('create');
    Route::delete('/delete/{id}', [itemController::class, 'destroy'])->name('delete');
    Route::put('/update/{id}', [itemController::class, 'update'])->name('update');
    Route::get('/edit/{id}', [itemController::class, 'edit'])->name('edit');
});



Route::middleware(['auth:sanctum',
 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');


