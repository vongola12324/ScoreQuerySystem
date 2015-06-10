<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function(){

    Route::controller('contest', 'ContestController', array(
        'getIndex'   => 'contest.index',
        'getCreate'  => 'contest.create',
        'postCreate' => 'contest.create',
        'getUpdate'  => 'contest.update',
        'postUpdate' => 'contest.update',
        'getDelete'  => 'contest.delete',
        'postDelete' => 'contest.delete',
        'getQuery'   => 'contest.query',
        'postQuery'  => 'contest.query'
    ));

    Route::controller('user', 'UserController', array(
        'getIndex'   => 'user.index',
        'postCreate' => 'user.create',
        'postUpdate' => 'user.update',
        'postDelete' => 'user.delete',
        'postQuery'  => 'user.query'
    ));

    Route::controller('score', 'ScoreController', array(
        'getIndex'   => 'score.index',
        'postCreate' => 'score.create',
        'postUpdate' => 'score.update',
        'postDelete' => 'score.delete',
        'postQuery'  => 'score.query'
    ));

    Route::controller('/', 'AdminController', array(
        'getIndex' => 'admin.index',
        'getLogin' => 'admin.login',
        'postLogin' => 'admin.login',
        'postLogout' => 'admin.logout',
        'postLeave' => 'admin.leave'
    ));
});

Route::controller('/', 'QueryController', array(
    'getIndex' => 'query.home',
    'postAuth' => 'query.login',
    'postShow' => 'query.show'
));
