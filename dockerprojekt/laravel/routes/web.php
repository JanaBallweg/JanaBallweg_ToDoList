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

    Route::get('/editTask/{task_id}', [
        'uses' => 'TaskController@edit',
        'as' => 'editTask',
        ]);

        Route::post('/updateTask/{task_id}', [
            'uses' => 'TaskController@update',
            'as' => 'updateTask',
            ]);
        
    

Auth::routes(['register' => false]);


Route::get('/home', 'HomeController@index')->name('home');
