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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [
	'uses' => 'TodosController@index'
	]
);
Route::post('/todos/create',[
    'uses' => 'TodosController@store'
]);
Route::get('/todos/delete/{id}',[
    'uses' => 'TodosController@delete',
    'as' => 'Todo.delete'
]);
Route::get('/todos/update/{id}',[
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);
Route::post('/todos/save/{id}',[
    'uses' => 'TodosController@save'
]);