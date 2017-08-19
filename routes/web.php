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
    Route::get('/master_game', [
        'uses' => 'MasterGameController@index',
        'as' => 'mastergame.index'
    ])->middleware('admin');
    Route::post('/master_game/create', [
        'uses' => 'MasterGameController@store',
        'as' => 'master.game.create'
    ])->middleware('admin');
    Route::get('game/delete/{id}',[
        'uses' => 'MasterGameController@destroy',
        'as' => 'game.delete'
    ])->middleware('admin');
    Route::get('game/lock/{id}',[
        'uses' => 'MasterGameController@gamelock',
        'as' => 'game.lock'
    ])->middleware('admin');
    Route::get('game/unlock/{id}',[
        'uses' => 'MasterGameController@gameunlock',
        'as' => 'game.unlock'
    ])->middleware('admin');
    Route::get('game/edit/{id}',[
        'uses' => 'MasterGameController@edit',
        'as' => 'game.edit'
    ])->middleware('admin');
    Route::get('game/score/{id}',[
        'uses' => 'MasterGameController@score',
        'as' => 'game.score'
    ])->middleware('admin');
    Route::post('game/update/{id}',[
        'uses' => 'MasterGameController@update',
        'as' => 'game.update'
    ])->middleware('admin');
    Route::post('master/game/score/{id}',[
        'uses' => 'MasterGameController@gamescore',
        'as' => 'master.game.score'
    ])->middleware('admin');
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
