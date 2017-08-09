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
    Route::get('/singlepost/{id}', [
        'uses' => 'FrontEndController@single',
        'as' => 'single'
    ]);


    Route::get('/nfl/profile',[
        'uses' => 'UsersController@profile',
        'as' => 'user.profile'
    ]);

    Route::post('/user/profile/update',[
        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'
    ]);


});

Auth::routes();



Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function (){

    Route::get('/user/edit/{id}', [
        'uses' => 'UsersController@edit',
        'as' => 'user.edit'
    ])->middleware('admin');

    Route::get('/home', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);


    Route::get('/post/create', [
        'uses' => 'PostsController@create',
        'as' => 'post.create'
    ]);


    Route::post('/post/store', [
        'uses' => 'PostsController@store',
        'as' => 'post.store'
    ]);

    Route::get('/category/create', [
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);

    Route::post('/category/store', [
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);
    Route::get('/categories', [
        'uses' => 'CategoriesController@index',
        'as' => 'categories'
    ]);
    Route::get('/category/edit/{id}', [
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);
    Route::get('/category/delete/{id}', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);
    Route::post('/category/update/{id}', [
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);
    Route::get('/posts', [
       'uses' => 'PostsController@index',
        'as' => 'posts'
    ]);
    Route::get('/posts/delete/{id}',[
       'uses' => 'PostsController@destroy',
        'as' => 'post.delete'
    ]);
    Route::get('posts/trashed', [
        'uses' => 'PostsController@trashed',
        'as' => 'post.trashed'
    ]);
    Route::get('/posts/edit/{id}', [
        'uses' => 'PostsController@edit',
        'as' => 'post.edit'
    ]);
    Route::post('/post/update/{id}', [
        'uses' => 'PostsController@update',
        'as' => 'post.update'
    ]);
    Route::get('/posts/kill/{id}',[
        'uses' => 'PostsController@kill',
        'as' => 'post.kill'
    ]);
    Route::get('/posts/restore/{id}',[
        'uses' => 'PostsController@restore',
        'as' => 'post.restore'
    ]);
    Route::get('/tags',[
        'uses' => 'TagsController@index',
        'as' => 'tags'
    ]);
    Route::get('/tag/edit/{id}',[
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);
    Route::post('/tag/update/{id}',[
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);
    Route::get('/tag/delete/{id}',[
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
    ]);
    Route::get('/tag/create',[
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);
    Route::post('/tag/store',[
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
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
    Route::get('/category/add-menu/{id}',[
        'uses' => 'CategoriesController@add_menu',
        'as' => 'category.add.menu'
    ])->middleware('admin');
    Route::get('/menu/remove-menu/{id}',[
        'uses' => 'CategoriesController@remove_menu',
        'as' => 'category.remove.menu'
    ])->middleware('admin');
});

Auth::routes('home');

Route::get('/home', 'HomeController@index');
Route::get('/nfl/profile/{id}', [
    'uses' => 'NflProfileController@index',
    'as' => 'nfl.profile'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
