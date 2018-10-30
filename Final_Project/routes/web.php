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

Route::get('/', 'frontController@index')->name('front_index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'adminController@index')->name('admindasboard');
Route::get('/admin/profile/view', 'adminController@profile_view')->name('adminprofileview');
Route::get('/admin/password/change', 'adminController@changepassword')->name('changepassword');
Route::post('/admin/password/change/insert', 'adminController@changepasswordupdate')->name('changepasswordupdate');
Route::resource('/group', 'GroupController');
Route::resource('/university', 'UniversityController');
Route::resource('/image', 'ImageController');
Route::resource('/unit', 'UnitController');
Route::resource('/subject', 'SubjectController');

Route::post('/student/register', 'studentRegisterControlller@register')->name('studentregister');
Route::get('/student', 'StudentController@index')->name('studentdashboard');
