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
    return view('Inicio');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/myfigurines', 'MyFigurinesController@index')->name('myfigurines');
    Route::get('/openpackage', 'OpenPackageController@index')->name('mypackages');
    Route::get('/openpackage/{rarity}', 'OpenPackageController@openPackage')->name('openpackage'); 
    Route::get('/buypackage', 'BuyPackageController@index')->name('packages');
    Route::get('/buypackage/{rarity}', 'BuyPackageController@buyPackage')->name('buypackage');   
    Route::get('/myalbum/{page}', 'SeeAlbumController@index')->name('myalbum');
});

