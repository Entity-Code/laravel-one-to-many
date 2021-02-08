<?php

use Illuminate\Support\Facades\Route;  

//EMPLOYEES
Route::get('/', 'EmployeeController@index')
    -> name('employees-index');

Route::get('/emp/{id}', 'EmployeeController@show')
    -> name('emp-show');

 

//TASKS
Route::get('/tasks', 'TaskController@index')
    -> name('tasks-index');   
    
Route::get('/task/{id}', 'TaskController@show')
    -> name('task-show');

Route::get('/create/task', 'TaskController@create')
    -> name('task-create');
Route::post('/store/task', 'TaskController@store')
    -> name('task-store');

Route::get('edit/{id}', 'TaskController@edit')
    -> name('task-edit');  
Route::post('update/{id}', 'TaskController@update')
    ->name('task-update');


//TYPOLOGIES 
Route::get('/typologies', 'TypologyController@index')
    -> name('typology-index');

Route::get('/typologies/{id}', 'TypologyController@show')
    -> name('typology-show');

Route::get('/create/typology', 'TypologyController@create')
    -> name('typology-create');
Route::post('/store/typology', 'TypologyController@store')
    -> name('typology-store');
