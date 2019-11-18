<?php


/*Route::get('/', function () {
    return view('welcome', 'TaskController@index');
});*/

Route::get('/', 'TaskController@index');

Route::post('/createTask', [
'uses' => 'TaskController@store',
'as' => 'createTask',
]);

Route::get('/deleteTask/{task_id}', [
    'uses' => 'TaskController@destroy',
    'as' => 'deleteTask',
    ]);
    
