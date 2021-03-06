<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [PagesController::class, 'index']);

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/', PostsController::class);

Route::get('dashboard', [PagesController::class, 'dashboard']);

// Route::get('store',[PostsController::class , 'store']);

// Route::get('show',[PostsController::class , 'show']);

// Route::PUT('edit',[PostsController::class , 'edit']);


Route::post('/create',[PostsController::class , 'store'])->name('posts');

Route::resource('/EPK', PostsController::class);

Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('EPK.search');


