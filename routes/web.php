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

Route::get('/', 'HomeController@showWelcome')->name('home');
Route::get('/about', 'AboutController@showAbout')->name('about');
Route::get('/portfolio', 'PortfolioController@showPortfolio')->name('portfolio');
Route::get('/social', 'SocialController@showSocial')->name('social');
Route::get('contact', 'ContactController@showContact')->name('contact');
