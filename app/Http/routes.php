<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin::'], function () {
    Route::group(['prefix' => 'dusun', 'as' => 'dusun::'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'DusunController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'DusunController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'DusunController@store']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'DusunController@edit']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'DusunController@update']);
        Route::post('search', ['as' => 'search', 'uses' => 'DusunController@search']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'DusunController@destroy']);
    });


    Route::group(['prefix' => 'kk', 'as' => 'kk::'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'KkController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'KkController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'KkController@store']);
        Route::post('storePend', ['as' => 'storePend', 'uses' => 'KkController@storePend']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'KkController@edit']);
        Route::get('show/{id}', ['as' => 'show', 'uses' => 'KkController@show']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'KkController@update']);
        Route::post('search', ['as' => 'search', 'uses' => 'KkController@search']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'KkController@destroy']);
    });
    Route::group(['prefix' => 'penduduk', 'as' => 'penduduk::'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'PendudukController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'PendudukController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'PendudukController@store']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'PendudukController@edit']);
        Route::post('update/{id}', ['as' => 'update', 'uses' => 'PendudukController@update']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'PendudukController@destroy']);
    });
});
