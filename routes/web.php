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
Route::get('/nos-service','IndexController@service')->name('service');
Route::get('/blog','IndexController@blog')->name('blog');
Route::get('/competence','IndexController@competence')->name('competence');
Route::get('/contact','IndexController@contact')->name('contact');
Route::get('/nos-portfolio','IndexController@portfolio')->name('portfolio');
Route::get('/nos-team','IndexController@team')->name('team');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('couverture', 'CouvertureController');
Route::resource('service', 'ServiceController');
Route::resource('team', 'TeamController');
Route::resource('portfolio', 'PortfolioController');