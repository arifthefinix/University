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
Route::get('group/edit/{group_id}', 'GroupController@editgroup');
Route::post('group/update', 'GroupController@updategroup');
Route::get('group/delete/{group_id}', 'GroupController@deletegroup');
Route::resource('/university', 'UniversityController');
Route::get('university/edit/{university_id}', 'UniversityController@edituniversity');
Route::post('university/update', 'UniversityController@updateuniversity');
Route::get('university/delete/{university_id}', 'UniversityController@deleteuniversity');
Route::get('university/image/delete/{image_id}', 'ImageController@deleteimage');
Route::resource('/image', 'ImageController');
Route::resource('/unit', 'UnitController');
Route::get('unit/edit/{unit_id}', 'UnitController@editunit');
Route::post('unit/update', 'UnitController@updateunit')->name('unitupdate');
Route::get('unit/delete/{unit_id}', 'UnitController@deleteunit');
Route::resource('/subject', 'SubjectController');
Route::get('subject/edit/{subject_id}', 'SubjectController@editsubject');
Route::post('subject/update', 'SubjectController@updatesubject')->name('subjectupdate');
Route::get('subject/delete/{subject_id}', 'SubjectController@deletesubject');
Route::resource('/notification', 'StudentNotificationController');
Route::get('admin/show/allnotification','adminController@allnotification')->name('allnotification');
Route::get('admin/notification/markread/{notification_id}','AdminNotificationController@adminnotificationmarkread')->name('adminnotificationmarkread');
Route::get('admin/allnotification','AdminNotificationController@alladminnotification')->name('alladminnotification');
Route::get('admin/notification/delete/{notification_id}','AdminNotificationController@adminnotificationdelete')->name('adminnotificationdelete');
Route::get('admin/profile/update/{user_id}','adminController@adminprofileupdate')->name('adminprofileupdate');
Route::post('admin/profile/update','adminController@adminprofileedit')->name('adminprofileedit');
Route::post('admin/image/update','adminController@adminimageupdate')->name('adminimageupdate');
Route::get('admin/allstudent','adminController@allstudent')->name('allstudent');
Route::get('admin/student/delete/{user_id}','adminController@studentdelete')->name('studentdelete');


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
Route::post('student/image/update','StudentController@studentimageupdate')->name('studentimageupdate');
Route::get('student/profile/update/{user_id}','StudentController@studentprofileupdate')->name('studentprofileupdate');
Route::post('student/profile/update','StudentController@studentprofileedit')->name('studentprofileedit');
