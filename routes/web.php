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

Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, \Config::get('app.locales'))) {
      Session::put('locale', $locale);
    }
    return redirect()->back();
  })->name('language');

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/categories','categoriesController@index')->name('list-categ');
    Route::get('/data_etablissement','categoriesController@data_etablissement')->name('datatables.etablissement');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
