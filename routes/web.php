<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/donor', function () {
    return view('donors.donor');
});
Route::get('/donate-form', function () {
    return view('donors.donate-form');
});
Route::get('/admin/project', function () {
    return view('projects.project-form');
});
Route::get('/admin/add', function () {
    return view('admin.add-project');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/','projectController@indexProject');
Route::get('/','donorsControllers@index');
Route::get('/donate','donorsControllers@index');
Route::get('/donor','donorsControllers@donorPage');
Route::get('/admin/user','donorsControllers@adminUser');
Route::get('/project','projectController@index');
Route::get('/donate-form','projectController@projectDonorform');
Route::get('/admin/add','projectController@adminproject');
Route::get('/admin','AdminController@index');
Route::get('admin/{project}/delete','AdminController@destroy');


Route::resource('donors','donorsControllers');
Route::resource('project','projectController');
Route::resource('admin','AdminController');
Route::resource('comment','CommentController');