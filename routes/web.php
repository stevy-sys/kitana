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

Route::get('/','IndexController@couverture')->name('accueil');
Route::get('/about','IndexController@about')->name('about');
Route::get('/service','IndexController@service')->name('service');
Route::get('/blog','IndexController@blog')->name('blog');
Route::get('/competence','IndexController@competence')->name('competence');
Route::get('/contact','IndexController@contact')->name('contact');
Route::get('/portfolio','IndexController@portfolio')->name('portfolio');
Route::get('/team','IndexController@team')->name('team');

