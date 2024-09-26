<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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
Route::get('/addblog',[BlogController::class,'createBlog']);//create new blog(view page)
Route::post('/saveblog',[BlogController::class,'saveBlog']);//save blog
Route::get('/createuser',[UserController::class,'createUser']);//create user(view page)
Route::post('/saveuser',[UserController::class,'saveUser']);//save user
Route::get('/login',[UserController::class,'login']);
Route::post('/loginaction',[UserController::class,'loginaction']);
