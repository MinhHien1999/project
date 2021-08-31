<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'adminController@getDashboard')->name('admin.dashboard');
    // Route::prefix('/category')->group(function () {
    //     Route::get('/', 'adminController@getCategory')->name('admin.category');  
    //     Route::get('/create', [
    //         'as' => 'category.create',
    //         'uses' => 'categoryController@create'
    //     ]);
    // });
    Route::get('/category', 'adminController@getCategory')->name('admin.category');
    Route::get('/login', 'auth\authController@getLogin')->name('admin.get.login');
    Route::post('/login', 'auth\authController@postLogin')->name('admin.post.login');
});
Route::prefix('admin/category')->group(function () {
    Route::get('/create', [
        'as' => 'category.create',
        'uses' => 'categoryController@create'
    ]);
    Route::post('/Add', [
        'as' => 'category.add',
        'uses' => 'categoryController@add'    
    ]);
});