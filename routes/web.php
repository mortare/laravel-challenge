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
    return view('home');
});

Route::get('/login',['as'=>'site.login','uses'=>'Site\Login_Controller@index']);
Route::get('/login/exit',['as'=>'site.login.exit','uses'=>'Site\Login_Controller@exit']);
Route::post('/login/enter',['as'=>'site.login.enter','uses'=>'Site\Login_Controller@enter']);

// Route::group(['middleware'=>'auth'],function(){


  Route::get('/admin/events',['as'=>'admin.events','uses'=>'Admin\Event_Controller@index']);
  Route::get('/admin/events/add',['as'=>'admin.events.add','uses'=>'Admin\Event_Controller@add']);
  Route::post('/admin/events/save',['as'=>'admin.events.save','uses'=>'Admin\Event_Controller@save']);
  Route::get('/admin/events/edit/{id}',['as'=>'admin.events.edit','uses'=>'Admin\Event_Controller@edit']);
  Route::put('/admin/events/update/{id}',['as'=>'admin.events.update','uses'=>'Admin\Event_Controller@update']);
  Route::get('/admin/events/del/{id}',['as'=>'admin.events.del','uses'=>'Admin\Event_Controller@del']);

// });
