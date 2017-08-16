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

Route::group(['middleware'=>'auth'], function () {
    Route::get('/', [
        'uses' => 'FrontEndController@index',
        'as' => 'index'
    ]);


    Route::get('/nfl/profile',[
        'uses' => 'UsersController@profile',
        'as' => 'user.profile'
    ]);

    Route::post('/user/profile/update',[
        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'
    ]);
    Route::get('/about', [
        'uses' => 'FrontEndController@about',
        'as' => 'about'
    ]);
});

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){

    Route::get('/user/edit/{id}', [
        'uses' => 'UsersController@edit',
        'as' => 'user.edit'
    ])->middleware('admin');

    Route::post('/admin/profile/update/{id}',[
        'uses' => 'UsersController@adminupdate',
        'as' => 'admin.profile.update'
    ]);

    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);

    Route::post('/post/store', [
        'uses' => 'PostsController@store',
        'as' => 'post.store'
    ]);

    Route::get('/users',[
       'uses' => 'UsersController@index',
        'as' => 'users'
    ])->middleware('admin');
    Route::get('/user/create',[
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);
    Route::post('/user/store',[
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);
    Route::get('/user/admin/{id}',[
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
    ])->middleware('admin');
    Route::get('/user/not-admin/{id}',[
        'uses' => 'UsersController@not_admin',
        'as' => 'user.not.admin'
    ])->middleware('admin');


    Route::get('user/delete/{id}',[
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);
    Route::get('/settings',[
        'uses' => 'SettingsController@index',
        'as' => 'settings'
    ]);
    Route::post('/settings/update',[
        'uses' => 'SettingsController@update',
        'as' => 'settings.update'
    ]);

});

Auth::routes('home');

Route::get('/home', 'HomeController@index');
Route::get('/nfl/profile/{id}', [
    'uses' => 'NflProfileController@index',
    'as' => 'nfl.profile'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
