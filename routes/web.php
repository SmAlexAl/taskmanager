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

Auth::routes();


Route::get('/create/users', 'CreateTestDataController@createUsers');

//Route::resource('project');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/project/add', 'Project\ProjectController@show');

Route::get('/projects', 'Project\ProjectController@views');

Route::post('/project', 'Project\ProjectController@create');

Route::get('/project/{project}', 'Project\ProjectController@view');

Route::get('/project/{project}/edit', 'Project\ProjectController@edit');

Route::post('/project/{project}', 'Project\ProjectController@update');

Route::get('/project/{project}/delete', 'Project\ProjectController@delete');




//task

Route::post('task', 'Task\TaskController@create');
Route::get('/task/add', 'Task\TaskController@add');
Route::get('/tasks', 'Task\TaskController@views');

Route::post('/task/{task}', 'Task\TaskController@update');

Route::get('task/{task}', 'Task\TaskController@show');
Route::get('task/{task}/edit', 'Task\TaskController@edit');