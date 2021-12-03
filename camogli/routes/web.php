<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

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
});


Route::middleware(['auth:sanctum',
 'verified'])->get('/dashboard', function () {
    return view('dashboard');

})->name('dashboard');


