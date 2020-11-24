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

route::get('/restas', 'api\RestaController@index');
route::post('/restas/store', 'api\RestaController@store');
route::get('/restas/{id?}', 'api\RestaController@show');
route::post('/restas/update', 'api\RestaController@update');
route::delete('/restas/{id?}', 'api\RestaController@destroy');

// Route::post('/v1/posts/store', 'api\v1\PostsController@store');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
