<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


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
    return view('main');
});





// Route::post('/add-product', 'ProductController@create');



Route::get('/add/product', [CategoryController::class, 'selectCategory']);
Route::post('/add-product', [ProductController::class, 'create']);

Route::get('/add/category', [CategoryController::class, 'index']);
Route::post('/add-category', [CategoryController::class, 'create']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
