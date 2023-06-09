<?php
// import PageController
use App\Http\Controllers\Guest\PageController;
// import ComicController
use App\Http\Controllers\ComicController;
// import MovieController
use App\Http\Controllers\MovieController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::resource('/movies', MovieController::class);
Route::resource('/comics', ComicController::class);
