<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category', CategoryController::class)->middleware('auth');
Route::resource('food', FoodController::class)->middleware('auth');


Route::get('/', [FoodController::class, 'listFood']);

Route::get('/foods/{id}',[FoodController::class, 'view'])->name('food.view');
