<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [BlogController::class, 'index']);
Route::get('/about', [BlogController::class, 'about']);
Route::get('/article', [BlogController::class, 'article']);
Route::get('/contact', [BlogController::class, 'contact']);
