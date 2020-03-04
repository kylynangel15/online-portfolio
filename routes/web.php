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
   return view('index');
})->name('home');

Route::get('download-resume', 'PortfolioController@downloadResume')->name('download.resume');





//API CONTROLS

Route::get('get-portfolios', 'PortfolioController@getPortfolio')->name('portfolio.get');
Route::get('get-skills', 'PortfolioController@getSkills')->name('skills.get');
