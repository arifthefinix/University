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

//Routes for groups

Route::resource('/group', 'GroupController');
Route::get('group/edit/{group_id}', 'GroupController@editgroup');
Route::post('group/update', 'GroupController@updategroup');
Route::get('group/delete/{group_id}', 'GroupController@deletegroup');

//Routes for universities

Route::resource('/university', 'UniversityController');
Route::get('university/edit/{university_id}', 'UniversityController@edituniversity');
Route::post('university/update', 'UniversityController@updateuniversity');
Route::get('university/delete/{university_id}', 'UniversityController@deleteuniversity');
Route::get('university/image/delete/{image_id}', 'ImageController@deleteimage');

//Routes for images

Route::resource('/image', 'ImageController');

//Routes for Unites

Route::resource('/unit', 'UnitController');
Route::get('unit/edit/{unit_id}', 'UnitController@editunit');
Route::post('unit/update', 'UnitController@updateunit')->name('unitupdate');
Route::get('unit/delete/{unit_id}', 'UnitController@deleteunit');

//Routes for Subjects

Route::resource('/subject', 'SubjectController');
Route::get('subject/edit/{subject_id}', 'SubjectController@editsubject');
Route::post('subject/update', 'SubjectController@updatesubject')->name('subjectupdate');
Route::get('subject/delete/{subject_id}', 'SubjectController@deletesubject');

//Routes for NOtifications

Route::resource('/notification', 'StudentNotificationController');
Route::get('/notification/delete/{id}', 'StudentNotificationController@notificationdelete');
Route::get('admin/show/allnotification','adminController@allnotification')->name('allnotification');
Route::get('admin/notification/markread/{notification_id}','AdminNotificationController@adminnotificationmarkread')->name('adminnotificationmarkread');
Route::get('admin/allnotification','AdminNotificationController@alladminnotification')->name('alladminnotification');
Route::get('admin/notification/delete/{notification_id}','AdminNotificationController@adminnotificationdelete')->name('adminnotificationdelete');

//Routes for Admin Profile

Route::get('admin/profile/update/{user_id}','adminController@adminprofileupdate')->name('adminprofileupdate');
Route::post('admin/profile/update','adminController@adminprofileedit')->name('adminprofileedit');
Route::post('admin/image/update','adminController@adminimageupdate')->name('adminimageupdate');
Route::get('admin/allstudent','adminController@allstudent')->name('allstudent');
Route::get('admin/student/delete/{user_id}','adminController@studentdelete')->name('studentdelete');

//Routes for Students

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


Route::get('uni/{uni_name}','frontController@university');

//Routes for Examination

Route::get('/examsubjects','HomeController@examsubjects')->name('examsubjects');
Route::post('subject/add','HomeController@examsubjectadd')->name('examsubjectadd');
Route::get('exam/subject/delete/{id}','HomeController@examsubjectdelete');

//Routes for Questions

Route::get('question/add','QuestionController@create')->name('addquestion');
Route::Post('question/add/new','QuestionController@store')->name('addnewquestion');
Route::get('questions','QuestionController@index')->name('allquestion');
Route::get('question/delete/{id}','QuestionController@destroy');

//Routes for JOb Cicculares

Route::get('job/add','HomeController@jobadd')->name('addjob');
Route::Post('job/add/new','HomeController@addnewjob')->name('addnewjob');
Route::get('jobs','HomeController@jobs')->name('alljob');
Route::get('job/delete/{id}','HomeController@jobdelete');

Route::get('jobcicular','frontController@jobcicular');

//Student Examinations

Route::get('student_exam','StudentController@student_exam')->name('student_exam');
Route::get('student_exam_question/subject/{subject}','StudentController@student_exam_question')->name('student_exam_question');
Route::post('student_exam/answer/submit','StudentController@student_exam_answer_submit')->name('studentexamanswersubmit');
