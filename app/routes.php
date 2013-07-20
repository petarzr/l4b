<?php
//create a group of routes that will belong to APIv1
Route::group(array('prefix' => 'v1'), function()
{
    Route::resource('users', 'V1\UsersController');

    Route::resource('posts', 'V1\PostsController');

    Route::resource('comments', 'V1\CommentsController');
});
//backbone app route
Route::get('/', function()
{
    //change our view name to the view we created in a previous step
    //notice that we do not need to provide the .mustache extension
    return View::make('layouts.application')->nest('content', 'app');
});
