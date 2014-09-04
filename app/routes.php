<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('home.index');
// });
Route::get('/', 'HomeController@showWelcome');

// Route::post('/',function(){
// 	//return 'Something has been posted';
// 	//dd($_POST);
// 	if (Request::ajax()) {
// 		return 'Saved';
// 	}
// 	//return Input::get('url');
// });
Route::post('/','HomeController@getUrl');

Route::get('{all}',function($short){
	$res = Url::whereshortened($short)->first();
	if (! is_null($res)) {
		return Redirect::to($res->original);
	}else{
		return Redirect::to('/');
	}
	//return $short;
});