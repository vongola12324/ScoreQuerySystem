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

Route::controller('/', 'QueryController', array(
    'getIndex' => 'query.home',
    'postAuth' => 'query.login',
    'postShow' => 'query.show'
));

Route::controller('admin', 'AdminController', array(
    'getIndex' => 'admin.index',
    'getLogin' => 'admin.login',
    'postCreateContest' => 'contest.create',
    'postUpdateContest' => 'contest.update',
    'postDeleteContest' => 'contest.delete',
    'getList' => 'contest.list'
));
