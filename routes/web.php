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

// recherche
Route::get('/search', 'SearchController@search')->name('search');

Auth::routes();


Route::get('/les offres', 'MapController@mapOffre')->name('les offres');
Route::get('/les demandes', 'MapController@mapDemande')->name('les demandes');

Route::group(['middleware' => 'auth'], function(){
    // routes for categories list
    Route::get('/dcategories', 'CategorieController@demandesIndex')->name('categories.demandesIndex');
    Route::resource('/categories', 'CategorieController');

    // routes for offreServices list
    Route::get('/{service}/offreservices', 'OffreServiceController@offreServicesList')->name('offreServicesList');
    Route::resource('offreservices','OffreServiceController');

    //routes for services list
     Route::get('/{categorie}/services','ServiceController@servicesByCategorieOffre')->name('servicesByCategorieOffre');
});

// Les routes pour OffreServiceController & DemandeServiceController
    // On définit partiellement les routes de la resource en excluant(except) index, show et destroy 
    // qui seront définis ailleurs.
Route::resource('offreServices', 'OffreServiceController')
    ->parameters([
        'offreServices'=>'offreService'
    ])->except([
        'index','show','destroy'
    ]);
Route::group(['middleware' =>'auth'],function()
{
    Route::get('voir/{offreService}','OffreServiceController@show')->name('offres.show');
    Route::get('{localisation0ffre?}/{departementOffre?}/{commune0ffre?}', 'OffreServiceController@index')->name('offres.index');
    Route::post('rechercheOffre', 'OffreServiceController@search')->name('offres.search')->middleware('ajax');
});

Route::resource('demandeServices', 'DemandeServiceController')
    ->parameters([
        'demandeServices'=>'demandeService'
    ])->except([
        'index','show','destroy'
    ]);
Route::group(['middleware'=>'auth'], function()
{
    Route::get('voir/{demandeService}','DemandeServiceController@show')->name('demandes.show');
    Route::get('{localisationDemande?}/{departementDemande?}/{communeDemande?}', 'DemandeServiceController@index')->name('demandes.index');
    Route::post('rechercheDemande', 'DemandeServiceController@search')->name('demandes.search')->middleware('ajax');
    Route::get('profile/utilisateur','UserController@view')->name('user.view');
}
);
<<<<<<< HEAD
// Gestion de l'interface utilisateur.
Route::prefix('utilisateur')->middleware('user')->group(function () {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::prefix('offreService')->group(function () {
        Route::get('actives', 'UserController@actives')->name('user.actives');
        Route::get('obsoletes','UserController@bsoletes')->name('user.obsoletes');
        Route::get('attente', 'UserController@attente')->name('user.attente');
    });
    Route::prefix('profil')->group (function () {
        Route::get('email', 'UserController@emailEdit')->name('user.email.edit');
        Route::get('email', 'UserController@emailUpdate')->name('user.email.update');
        Route::get('donnees', 'UserController@data')-> name('user.data');

    });

});
=======

>>>>>>> ff530bcb5190ad7398e49e8b8211ac901927a6a8
