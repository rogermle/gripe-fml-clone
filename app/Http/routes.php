<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PostController@index');
Route::get('post/search', ['as' => 'post.search', 'uses' => 'PostController@search']);
Route::put('post/{post}/like', ['as' => 'post.like', 'uses' =>'PostController@upvote']);
Route::put('post/{post}/dislike', ['as' => 'post.dislike', 'uses' =>'PostController@downvote']);
Route::resource('post', 'PostController');
Route::resource('post.comments', 'PostCommentController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
