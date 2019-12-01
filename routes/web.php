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


Route::get('/les offres', 'MapController@mapOffre')->name('les offres');
Route::get('/les demandes', 'MapController@mapDemande')->name('les demandes');

Route::group(['middleware' => 'auth'], function(){
    // routes for categories list
    Route::get('/dcategories', 'CategorieController@demandesIndex')->name('categories.demandesIndex');
    Route::resource('/categories', 'CategorieController');

    // routes for offreServices list
    //Route::get('/{service}/offreservices', 'OffreServiceController@offreServicesList')->name('offreServicesList');
    //Route::resource('offreservices','OffreServiceController');

    //routes for services list
   // Route::get('/{categorie}/services','ServiceController@servicesByCategorieOffre')->name('servicesByCategorieOffre');
});


Route::group(['middleware' =>'auth'],function()
{
    Route::get('voir/{offreService}','OffreServiceController@show')->name('offres.show');
    Route::get('{localisation?}/{departement?}/{commune?}', 'OffreServiceController@index')->name('offres.index');
    Route::post('recherche', 'OffreServiceController@search')->name('offres.search')->middleware('ajax');
});