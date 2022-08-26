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

Route::get('/', 'PageController@getIndex');
Route::get('/login', 'PageController@getLogin')->name('login');
Route::get('/register', 'PageController@getRegister')->name('register');
Route::get('/logout', 'PageController@logout');
// Route::get('index',['as' => 'trang-chu','uses' => 'PageController@getIndex']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
