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

Route::get('/', function()
{       
//	return View::make('hello');
	return View::make('front_end/login');
});
//Route::get('post/single', function()
//{
//	return View::make('post/single');
//});
Route::post('login/submit',array('uses' =>'LoginController@authenticate', 'as' => 'login/submit'));
//Route::get('post/single','PostController@single');
Route::get('post/single', array('uses' => 'PostController@single', 'as' => 'post/singl', 'before' => 'auth'));
//Route::get('post/listing', array('uses' => 'PostController@listing', 'as' => 'post/listing'));
Route::get('post/{id}/{name}', array('uses' => 'PostController@single', 'as' => 'post/singl'))->where('id', '[0-9]+');
Route::get('template', ['as'=>'home',function(){
    return View::make('template/header');
}]);
Route::get('login', function (){
    return View::make('front_end/login'); 
});



Route::group(array('before' => 'auth'), function (){
    
    Route::Post('passwordSubmit', array('uses' => 'LoginController@changePasswordSubmit', 'as' => 'passwordSubmit'));
    Route::get('front_end/changePassword', array('uses' => 'LoginController@changePassword', 'as' => 'front_end/changePassword'));
    Route::get('front_end/logout', array('uses' => 'LoginController@logout', 'as' => 'front_end/logout'));
    Route::get('front_end/home', array('uses' => 'CompanyType@showAll', 'as' => 'front_end/home' ));
    
    
    
});