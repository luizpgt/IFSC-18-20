<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::post('/threads/create/do', 'Api\ThreadApiController@store')->name('thread.create.do');
    Route::put('/threads/update/do/{id}', 'Api\ThreadApiController@update')->name('thread.update.do');
    Route::get('/threads', 'Api\ThreadApiController@index')->name('thread.list');
    Route::get('/threads/{id}', 'Api\ThreadApiController@show')->name('thread.show');
    Route::delete('/threads/destroy/{id}', 'Api\ThreadApiController@destroy')->name('thread.destroy');
    Route::post('/threads/search/do', 'Api\ThreadApiController@search')->name('thread.search.do');

    //filter func
    Route::get('/threads/filter/{id}', 'Api\ThreadApiController@filterByAssunto')->name('thread.filter');
    Route::get('/threads/user/filter/{id}', 'Api\ThreadApiController@filterByUser')->name('thread.user.filter');
