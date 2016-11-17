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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes([
    'only' => ['login', 'logout']
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    
    Route::get('/', 'AdminsController@index');
    
    Route::get('/sites/api-secret/{id}', 'SitesController@apiSecret');
    
    Route::resource('sites', 'SitesController');
    
    Route::get('/{site_id}/products', 'ProductsController@index');
    
    Route::get('/{site_id}/sales', 'SalesController@index');
    
    Route::get('/{site_id}/payments', 'PaymentsController@index');
    
    Route::get('/payments/on-process', 'PaymentsController@onProcess');
    
    
   
    
});


Route::group(['prefix' => 'v1'], function () {
   
    Route::post('/test', 'ApiController@test');
    
    Route::resource('products', 'ProductsController',[
    
    'only' => ['store', 'update','destroy']
    
    ]);
    
    Route::resource('sales', 'SalesController',[
    
    'only' => ['store']
    
    ]);
    
    Route::resource('payments', 'PaymentsController',[
    
    'only' => ['store']
    
    ]);
    
});

