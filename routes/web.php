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

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'cors'], function ()
{
    Route::get('quotes/all', 'QuotesController@quotesAll');
    Route::get('quotes/search/{q}/{p}', 'QuotesController@quotesSearch');
    Route::get('authors/search/{a}/{p}', 'AuthorsController@authorSearch');
    Route::get('authors/quotes/{a}/{p}', 'AuthorsController@authorQuotes');
    Route::get('quotes/random', 'QuotesController@random');
    Route::get('relations/{author}/{p}', 'RelationsController@relations');
});
