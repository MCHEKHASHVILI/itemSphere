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
    return view('welcome')->with(["page" => "home"]);
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("categories", CategoriesController::class);
Route::resource("products", ProductsController::class);
Route::resource("charities", CharitiesController::class);

Route::resource("posts", PostsController::class);
Route::resource("socials", SocialsController::class);
Route::resource("stores", StoresController::class);


Route::prefix('pages')->name('pages.')->group(function () {
    /** Under Construction (Controller Needed) */
    Route::get('about', function () { return view('pages.about')->with(["page"=>"about"]); })->name('about');
    Route::get('blog', function () { return view('pages.blog')->with(["page"=>"blog"]); })->name('blog');
    Route::get('shop', function () { return view('pages.shop')->with(["page"=>"shop"]); })->name('shop');
    Route::get('news', function () { return view('pages.news')->with(["page"=>"news"]); })->name('news');
    Route::get('market', function () { return view('pages.market')->with(["page"=>"market"]); })->name('market');
    Route::get('social', function () { return view('pages.social')->with(["page"=>"social"]); })->name('social');
    Route::get('charities', function () { return view('pages.charities')->with(["page"=>"charities"]); })->name('charities');

});
Route::resource("pages", PagesController::class);