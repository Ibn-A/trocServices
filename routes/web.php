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
    return view('accueil');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// routes for categories list
Route::get('/dcategories', 'CategorieController@demandesIndex')->name('categories.demandesIndex');
Route::resource('categories', 'CategorieController');

// routes for offreServices list
Route::resource('categories','OffreServiceController');
