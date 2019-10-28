<?php

use Illuminate\Http\Request;

use App\User;

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

Route::get('products', function () {
    $products = App\Product::all();
    return compact('products');
});

Route::get('categories', function () {
    $categories = App\Category::all();
    return compact('categories');
});

Route::post('register', 'UserController@register');

Route::post('login', 'UserController@login');

Route::middleware('jwt.auth:api')->post('purchase', 'PurchaseController@purchase');

Route::middleware(['jwt.auth:api', 'admin:api'])->group(function() {
    Route::get('admin/products', 'AdminController@index');
    
    Route::post('admin/product/store', 'AdminController@store');
    
    Route::post('admin/product/{id}', 'AdminController@edit');
    
    Route::delete('admin/product/{id}', 'AdminController@destroy');
    // Route::post('admin/product/delete/{id}', 'AdminController@destroy');
    
    Route::get('admin/users', 'AdminController@userIndex');
    
    Route::get('admin/categories', 'AdminController@categoryIndex');
    
    Route::post('admin/category/store', 'AdminController@categoryStore');
    
    Route::put('admin/category/{id}', 'AdminController@categoryEdit');
    // Route::post('admin/category/{id}', 'AdminController@categoryEdit');
    
    Route::delete('admin/category/{id}', 'AdminController@categoryDestroy');
    // Route::post('admin/category/delete/{id}', 'AdminController@categoryDestroy');
    
    Route::get('admin/orders', 'AdminController@orderIndex');
});
