<?php

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
    // return view('home');
    return redirect('/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'TestController@index');

// Route::prefix('user')->group(function () {
Route::middleware(['auth'])->group(function(){

	Route::get('/user/profile', 'UserController@index')->name('profile');
	Route::get('/user/edit', 'UserController@getEdit');
	Route::post('/user/edit', 'UserController@postEdit');

});
