<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\SocialsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CharitiesController;
use App\Http\Controllers\CategoriesController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("categories", CategoriesController::class);
Route::resource("products", ProductsController::class);
Route::resource("charities", CharitiesController::class);
Route::resource("pages", PagesController::class);
Route::resource("posts", PostsController::class);
Route::resource("socials", SocialsController::class);
Route::resource("stores", StoresController::class);
