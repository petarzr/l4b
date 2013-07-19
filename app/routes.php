<?php

//backbone app route
Route::get('/', function()
{
    //change our view name to the view we created in a previous step
    //notice that we do not need to provide the .mustache extension
    return View::make('layouts.application')->nest('content', 'app');
});
