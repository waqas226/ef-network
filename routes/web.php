<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::get('/login', function () {
    
    if(session()->has('login')){
        return redirect('index');
    }else{
    return view('login');
    }
});
Route::get('/logout', function () {
if(session()->has('login')){
    session()->pull('login');
    session()->pull('username');
}
   return redirect('login');
});
Route::post('/login',[AdminController::class,'login']);
Route::get('/index',[AdminController::class,'index'])->middleware('adminProtect');
Route::get('/users',[AdminController::class,'users'])->middleware('adminProtect');
Route::get('/videos',[AdminController::class,'videos'])->middleware('adminProtect');
Route::get('/add-video',function(){
    return view('addvideo');
})->middleware('adminProtect');
Route::get('/articles',[AdminController::class,'articles'])->middleware('adminProtect');
Route::get('/add-article',function(){
    return view('addarticle');
})->middleware('adminProtect');