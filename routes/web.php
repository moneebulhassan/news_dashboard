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
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('forms.create');
//
// Route::get('/admin/categories', 'CategoriesController@index')->name('list_category');
// Route::get('/admin/categories/detail/{id}', 'CategoriesController@detail')->name('detail_category');
  Route::namespace('admin')->prefix('admin')->as('admin.')->middleware('auth')->group(function(){

  Route::get('/', 'HomeController@index')->name('home');
  Route::resource('/categories', 'CategoriesController');
  Route::resource('/news', 'NewsController');

});


Route::resource('forms', 'ComputerController');
