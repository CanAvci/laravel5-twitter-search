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

Route::get('/',["as"=>"home","uses"=>"TwitterController@index"]);
Route::post('/tweet',["as"=>"searc_tweet","uses"=>"TwitterController@search"]);
Route::get('/tweet',["as"=>"searc_tweet_get","uses"=>function(){

	return Redirect()->route('home');
}]);