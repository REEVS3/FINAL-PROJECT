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
Route::get('/charts','PagesController@charts');
Route::post('/senddata','PagesController@senddata')->name('pages.Questions');
Route::post('/sendquestions','PagesController@sendquestions')->name('pages.index');
Route::get('/','PagesController@index');
Route::get('/completed','PagesController@completedlabs');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
