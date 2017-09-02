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

    Route::get('view/picks/{id}',[
        'uses' => 'UserGameController@show',
        'as' => 'view.picks'
    ]);

    Route::get('/nfl/profile',[
        'uses' => 'UsersController@profile',
        'as' => 'user.profile'
    ]);

    Route::get('/nfl/standings/season',[
        'uses' => 'Standings@season',
        'as' => 'season.standings'
    ]);

    Route::get('/nfl/standings/week',[
        'uses' => 'Standings@week',
        'as' => 'week.standings'
    ]);
    //Weekly Picks

    Route::get('/picks/week1',[
        'uses' => 'UserGameController@week1',
        'as' => 'week1.pick'
    ]);

    Route::get('/picks/week2',[
        'uses' => 'UserGameController@week2',
        'as' => 'week2.pick'
    ]);
    Route::get('/picks/week3',[
        'uses' => 'UserGameController@week3',
        'as' => 'week3.pick'
    ]);
    Route::get('/picks/week4',[
        'uses' => 'UserGameController@week4',
        'as' => 'week4.pick'
    ]);
    Route::get('/picks/week5',[
        'uses' => 'UserGameController@week5',
        'as' => 'week5.pick'
    ]);
    Route::get('/picks/week6',[
        'uses' => 'UserGameController@week6',
        'as' => 'week6.pick'
    ]);
    Route::get('/picks/week7',[
        'uses' => 'UserGameController@week7',
        'as' => 'week7.pick'
    ]);
    Route::get('/picks/week8',[
        'uses' => 'UserGameController@week8',
        'as' => 'week8.pick'
    ]);
    Route::get('/picks/week9',[
        'uses' => 'UserGameController@week9',
        'as' => 'week9.pick'
    ]);
    Route::get('/picks/week10',[
        'uses' => 'UserGameController@week10',
        'as' => 'week10.pick'
    ]);
    Route::get('/picks/week11',[
        'uses' => 'UserGameController@week11',
        'as' => 'week11.pick'
    ]);
    Route::get('/picks/week12',[
        'uses' => 'UserGameController@week12',
        'as' => 'week12.pick'
    ]);
    Route::get('/picks/week13',[
        'uses' => 'UserGameController@week13',
        'as' => 'week13.pick'
    ]);
    Route::get('/picks/week14',[
        'uses' => 'UserGameController@week14',
        'as' => 'week14.pick'
    ]);
    Route::get('/picks/week15',[
        'uses' => 'UserGameController@week15',
        'as' => 'week15.pick'
    ]);
    Route::get('/picks/week16',[
        'uses' => 'UserGameController@week16',
        'as' => 'week16.pick'
    ]);
    Route::get('/picks/week17',[
        'uses' => 'UserGameController@week17',
        'as' => 'week17.pick'
    ]);
    Route::get('/picks/week18',[
        'uses' => 'UserGameController@week18',
        'as' => 'week18.pick'
    ]);
    Route::get('/picks/week19',[
        'uses' => 'UserGameController@week19',
        'as' => 'week19.pick'
    ]);
    Route::get('/picks/week20',[
        'uses' => 'UserGameController@week20',
        'as' => 'week20.pick'
    ]);
    Route::get('/picks/week21',[
        'uses' => 'UserGameController@week21',
        'as' => 'week21.pick'
    ]);
Route::get('/picks/currentweek',[
        'uses' => 'UserGameController@curentweek',
        'as' => 'currentweek.pick'
    ]);
Route::get('/admin/userspicks',[
        'uses' => 'UserGameController@adminuserpicks',
        'as' => 'admin.user.pick'
    ])->middleware('admin');
Route::get('/weekly/winners',[
        'uses' => 'Standings@weeklywinners',
        'as' => 'weekly.winners'
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
    Route::post('/userpick/update/{id}', [
        'uses' => 'UserGameController@updatepick',
        'as' => 'user.pick.update'
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
    Route::post('/mastergame/createsheet',[
        'uses' => 'UserGameController@createsheet',
        'as' => 'create.sheet'
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
