<?php

use Illuminate\Http\Request;

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

Route::get('showcase', 'Resources\ShowcaseController@index');
Route::post('showcase', 'Resources\ShowcaseController@store');
Route::get('showcase/{showcase}', 'Resources\ShowcaseController@show');
Route::patch('showcase/{showcase}', 'Resources\ShowcaseController@update');

// showcase
Route::get('showcase/{showcase}/cell', 'Resources\Showcase\CellController@index');
Route::post('showcase/{showcase}/cell', 'Resources\Showcase\CellController@store');

// product
Route::get('product', 'Resources\ProductController@index');
Route::post('product', 'Resources\ProductController@store');
Route::get('product/{product}', 'Resources\ProductController@show');
Route::patch('product/{product}', 'Resources\ProductController@update');

// product reference
Route::get('productReference', 'Resources\ProductReferenceController@index');
Route::get('productReference/{terms}', 'Resources\ProductReferenceController@index');

// collection
Route::get('collection', 'Resources\CollectionController@index');
Route::post('collection', 'Resources\CollectionController@store');

Route::post('collection/{collection}/product', 'Resources\CollectionProductController@store');
