<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
// */
Route::resource('/posts','PostController');
// Route::get('/posts','PostController@index');
// Route::post('/posts','PostController@store');
// Route::post('/posts','PostController@update');
// Route::get('/posts','PostController@destroy');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
