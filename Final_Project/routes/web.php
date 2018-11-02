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
Route::resource('/notification', 'StudentNotificationController');
Route::get('admin/show/allnotification','adminController@allnotification')->name('allnotification');
Route::get('admin/notification/markread/{notification_id}','AdminNotificationController@adminnotificationmarkread')->name('adminnotificationmarkread');
Route::get('admin/allnotification','AdminNotificationController@alladminnotification')->name('alladminnotification');
Route::get('admin/profile/update/{user_id}','adminController@adminprofileupdate')->name('adminprofileupdate');
Route::post('admin/profile/update','adminController@adminprofileedit')->name('adminprofileedit');
Route::post('admin/image/update','adminController@adminimageupdate')->name('adminimageupdate');


Route::post('/student/register', 'studentRegisterControlller@register')->name('studentregister');
Route::get('/student', 'StudentController@index')->name('studentdashboard');
Route::get('/student/profile/view', 'StudentController@studentprofileview')->name('studentprofileview');
Route::get('/student/password/change', 'StudentController@studentchangepassword')->name('studentchangepassword');
Route::post('/student/password/update', 'StudentController@studentpasswordupdate')->name('studentpasswordupdate');
Route::get('/student/universities', 'StudentController@studentuniversities')->name('studentuniversities');
Route::get('/student/university/unit/{university_id}', 'StudentController@studentuniversityunit');
Route::get('/student/apply/unit', 'StudentController@studentapplyunit')->name('studentapplyunit');
Route::get('/student/unit/subjects/{unit_id}', 'StudentController@studentunitsubjects')->name('studentunitsubjects');
Route::get('/student/subjects/list', 'StudentController@studentsubjectslist')->name('studentsubjectslist');
