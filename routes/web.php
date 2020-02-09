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



Route::get('/blog/create','BlogController@create');
Route::get('/blog','BlogController@show');
Route::get('/blog/detail/{id}','BlogController@detail');
Route::post('/blog/store','BlogController@store');
Route::delete('/blog/{id}','BlogController@destroy');

//Route::get('/avatar','BlogController@destroy');

Route::post('/blog/detail/{id}/comment','CommentController@store');
Route::post('/blog/detail/{id}','LikeController@update');


//Route::get('/blog/detail/{id}','CommentController@detail');
//Route::post('/blog/detail/{id}','CommentController@store');


Auth::routes();
Route::get('/logout','Auth\LoginController@logout');




Route::get('/profile','FormController@profile');




Route::get('/profile/post','ProfileController@show');
Route::get('/profile/blog/detail/{id}','ProfileController@detail');

Route::get('/','HomeController@index');

Route::get('/group/create','GroupController@create');
Route::post('/group/store','GroupController@store');
Route::get('/group','GroupController@show');
Route::get('/group','GroupController@search');
Route::get('/group/{id}','GroupController@detail');

Route::get('/photos/create/{id}','PostgroupController@create');
Route::post('/photos/store','PostgroupController@store');
Route::get('/photos/{id}','PostgroupController@show');
Route::delete('/photos/{id}','PostgroupController@destroy');

Route::post('/group/{id}/comphoto','ComphotoController@store');

Route::get('/activity/create','ActivityController@create');
Route::post('/activity/store','ActivityController@store');
Route::get('/activity','ActivityController@show');
Route::get('/activity/detail/{id}','ActivityController@detail');

Route::post('/activity/detail/{id}','EventactivityController@update');


//backend

//Route::get('/backend/create/survey','AvatarController@create');

Route::post('/backend/survey/store','AvatarController@store');

Route::get('/home/survey','AvatarController@show');

//Route::get('/backend/avatar','FirstController@create');
//Route::post('/backend/avatar/store','FirstController@store');



Route::get('/backend/avatar', 'FormController@index');
Route::post('upload_data', 'FormController@store');

//Route::get('/profile','AvatarController@home');

Route::get('/home','FormController@show');

Route::post('/avatar/store','ChavatarController@store');
Route::get('/home/profile','AvatarController@show');



Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});


