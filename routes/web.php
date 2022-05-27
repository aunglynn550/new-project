<?php

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


Route::get('/csstest', function () {
    return view('csstest');
});


Route::get('/page', function () {
    return view('page');
});


Route::post('/wait','WaitController@wait')->name('wait');


Route::get('/blogs','BlogsController@index')->name('blogs');




Route::get('/login', function () {
    return view('login');
})->name('login');







Route::middleware(['auth'])->group(function () {
    // Route::get('/approval', 'HomeController@approval')->name('approval');

    // Route::middleware(['approved'])->group(function () {
    //     Route::get('/home', 'HomeController@index')->name('home');
    // });

    // Route::middleware(['admin'])->group(function () {
    //     Route::get('/users', 'UserController@index')->name('admin.users.index');
    //     Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
    // });
});




// Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
