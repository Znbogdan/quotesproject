<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middlewareGroups' => ['web']], function() {
    Route::get('/{author?}', [
      'uses' => 'QuoteController@getIndex',
      'as' => 'index'
    ]);

    Route::post('/new', [
      'uses' => 'QuoteController@postQuote',
      'as' => 'create'
    ]);

    Route::get('/delete/{quote_id}', [
      'uses' => 'QuoteController@getDeleteQuote',
      'as' => 'delete'
    ]);
});
