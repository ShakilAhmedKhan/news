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

Route::get('/','HomePageController@index');


Route::get('/catagory','catagoryController@index');

Route::get('/details','DetailsController@index');

Route::get('/user/{id}/{name?}', function($id, $name="Shakil"){
    return "your Id is ".$id."and my name is ".$name;
})->where('id','[0-9]+');

Route::get('/world', 'helloController@hello');

Route::get('/add', 'addController@index');

Route::get('/about',['uses'=>'aboutController@about', 'as' => 'about']);

Route::get('/contact', function(){
    return view('contact');
});

Route::group(['prefix'=>'back','middleware'=>'auth'], function(){
    Route::get('/','admin\DeshboardController@index');
    Route::get('/category','admin\CategoryController@index');
    Route::get('/category/create','admin\CategoryController@create');
    Route::get('/category/edit','admin\CategoryController@edit');
});

Route::get('/query','DBController@index');
Route::get('/joining','DBController@joining');
Route::get('/user_order','DBController@user_order');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
