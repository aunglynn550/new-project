<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/card', function () {
    return view('styles/card');
})->name('card');


Route::get('/page', function () {
    return view('page');
})->name('page');


Route::get('/sidebar', function () {
    return view('dev/sidebar');
});


Route::get('/typewriter', function () {
    return view('dev/typewriter');
});

Route::get('layout', function (){
    return view('dev/responsivelayout');
});

Route::get('thebox', function (){
    return view('dev/thebox');
});

Route::get('slopes', function(){
    return view('dev/slopes');
});    
    
ROute::get('helloyes', function(){
    return view('dev/helloyes');
});

ROute::get('popdog', function(){
    return view('dev/popdog');
});


ROute::get('ebo', function(){
    return view('dev/ebo');
});

ROute::get('borderbox', function(){
    return view('dev/borderbox');
});

Route::get('/button', function () {
    return view('dev/button');
});


Route::get('/image-shadow', function () {
    return view('dev/image-shadow');
});



    Route::middleware(['auth'])->group(function () {
        Route::get('/home', [ App\Http\Controllers\HomeController::class, 'user' ])->name('home');
 
    });
    



    
    
    
  









Auth::routes();