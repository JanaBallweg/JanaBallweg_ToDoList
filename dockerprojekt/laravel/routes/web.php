<?php

Route::get('/', 'TaskController@index')->middleware(['auth', 'password.confirm']);

Route::post('/createTask', [
'uses' => 'TaskController@store',
'as' => 'createTask',
]);

Route::get('/deleteTask/{task_id}', [
    'uses' => 'TaskController@destroy',
    'as' => 'deleteTask',
    ]);
    

Auth::routes(['register' => false]);


Route::get('/home', 'HomeController@index')->name('home');
