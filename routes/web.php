<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact',[
    'uses'=>'ContactController@create',
    'as'=>'contact'
]);
Route::post('/store',[
    'uses'=>'ContactController@store',
    'as'=>'contact.store'
]);
Route::get('/index',[
    'uses'=>'ContactController@index',
    'as'=>'index'
]);
Route::get('/destroy/{id}',[
    'uses'=>'ContactController@destroy',
    'as'=>'contact.destroy'
]);
Route::get('/edit/{id}',[
    'uses'=>'ContactController@edit',
    'as'=>'contact.edit'
]);
Route::post('/update/{id}',[
    'uses'=>'ContactController@update',
    'as'=>'contact.update'
]);