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

Route::get('/','PagesController@home');

Route::get('/about','PagesController@about');

Route::get('/contact','PagesController@contact');


Route::resource('projects','Projectscontroller');


//
//Route::get('/projects','Projectscontroller@index');
//
//Route::post('/projects','Projectscontroller@store');
//
//Route::get('/projects/{project}','Projectscontroller@show');
//
//Route::get('/projects/create','Projectscontroller@create');
//
//Route::get('/projects/{project}/edit','Projectscontroller@edit');
//
//Route::patch('/projects/{project}','Projectscontroller@update');
//
//Route::delete('/projects/{project}','Projectscontroller@destroy');