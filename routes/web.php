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

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');
Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
/*
Route :: get('/users/{name}/{id}' , function($name , $id){
    return 'This is your Name '.$name.' With and id of'.$id;
});
*/

/*
Route::get('/hello', function () {
  //  return view('welcome');
      return '<h1>Hello World !</h1>';
});
*/



