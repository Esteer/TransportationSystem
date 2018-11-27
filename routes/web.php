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
Route::group(['middleware'=>['web','admin']],function()
{
    Route::get('/adminpanel', 'AdminController@index'); 
    Route::resource('/adminpanel/users', 'UsersController');
    Route::get('/adminpanel/users/{user}/show', 'UsersController@show'); 
});
Route::group(['middleware'=>['web','driver']],function()
{
    Route::get('/driver', 'DriverController@login'); 

});
Route::group(['middleware'=>['web','child']],function()
{
    Route::get('/child', 'childrenController@login'); 

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/show',function(){
//     return view('admin.users.show');
//   });