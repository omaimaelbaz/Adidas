<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/category',[CategoryController::class,'table_category']);
Route::get('/addcategory',[CategoryController::class,'ajouter']);
Route::post('/category',[CategoryController::class,'store']);

Route::get('/delete/{id}', [CategoryController::class, 'delete']);






