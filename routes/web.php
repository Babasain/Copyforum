<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;

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
    return redirect('show');
});
Route::get('/show',[CategoryController::class,'show']);

Route::view('/index','index');
Route::view('/about','about');
Route::view('/contact','contact');
Route::view('/showdata','showdata');
Route::get('/showthread/{id}',[CategoryController::class,'showcat']);
Route::post('/insertthread',[ThreadController::class,'insertquestion']);
Route::get('/threadq/{id}',[CategoryController::class,'threadquestion']);
Route::post('/insertcomment',[CommentController::class,'insertcomment']);
Route::post('/contactpage',[ContactController::class,'insertcontact']);
Route::post('/signupuser',[AccountController::class,'insertuser']);
Route::post('/loginuser',[AccountController::class,'login']);
Route::get('/logout',[AccountController::class,'logout'])->name('logout');