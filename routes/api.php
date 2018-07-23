<?php

use Illuminate\Http\Request;
use App\Article;

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

Route::Resource('articles', 'Api\ApiArticlesController');

Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout');

Route::middleware('auth:api')
->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::get('articles', 'Api\ApiArticlesController@index');

Route::get('articles/{id}', function($id) {
    
});

Route::post('articles', function(Request $request) {
    
});

Route::put('articles/{id}', function(Request $request, $id) {
   
});

Route::delete('articles/{id}', function($id) {
    
});*/
