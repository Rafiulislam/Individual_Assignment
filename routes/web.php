<?php

Route::get('/', function () {
    return redirect()->route('login.index');
});

Route::get('/registration', function () {
    return view('registration.index');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

//registration
Route::post('registration','RegistrationController@registration');


//admin route

Route::get('/adminhome', 'AdminHomeController@index')->name('adminhome.index');

Route::get('/adminhome/studentsinfo', 'AdminHomeController@studentsinfo')->name('adminhome.studentsinfo');
Route::post('/adminhome/studentsinfo', 'AdminHomeController@updatestdstatus');

Route::get('/adminhome/teachersinfo', 'AdminHomeController@teachersinfo')->name('adminhome.teachersinfo');
Route::post('/adminhome/teachersinfo', 'AdminHomeController@updateteacherstatus');

Route::get('/adminhome/search', 'AdminHomeController@search')->name('adminhome.search');
Route::post('/adminhome/search', 'AdminHomeController@postsearch');

Route::get('/adminhome/subject', 'AdminHomeController@subject')->name('adminhome.subject');
Route::post('/adminhome/subject', 'AdminHomeController@insertsubject');

Route::get('/adminhome/assignteacher', 'AdminHomeController@assignteacher')->name('adminhome.assignteacher');
Route::post('/adminhome/assignteacher', 'AdminHomeController@insertteachertosubject');
Route::post('/adminhome/allsubjects', 'AdminHomeController@allsubjects');
Route::post('/adminhome/allteachers', 'AdminHomeController@allteachers');

Route::get('/adminhome/sendnotice', 'AdminHomeController@sendnotice')->name('adminhome.sendnotice');
Route::post('/adminhome/sendnotice', 'AdminHomeController@inserttnotice');

Route::get('/adminhome/studentreport', 'AdminHomeController@studentreport')->name('adminhome.studentreport');
Route::post('/adminhome/studentreport', 'AdminHomeController@poststudentreport');


//New Admin route
Route::get('/admin','adminController@index')->name('admin.index');

Route::get('/admin/userinfo','adminController@userinfo')->name('admin.userinfo');

Route::get('/admin/moderatorinfo','adminController@moderatorinfo')->name('admin.moderatorinfo');

Route::get('/admin/search','adminController@search')->name('admin.search');

Route::get('/admin/content','adminController@content')->name('admin.content');

Route::get('/admin/request-content','adminontroller@request_content')->name('admin.request-content');

Route::get('/admin/moderator-msg','adminontroller@moderator_msg')->name('admin.moderator-msg');

Route::get('/admin/report','adminontroller@report')->name('admin.report');

Route::get('/admin/notice','adminontroller@notice')->name('admin.notice');












//teacher route

Route::get('/teacherhome', 'TeacherHomeController@index')->name('teacherhome.index');

Route::get('/teacherhome/sendnotice', 'TeacherHomeController@sendnotice')->name('teacherhome.sendnotice');
Route::post('/teacherhome/sendnotice', 'TeacherHomeController@insertnotice');

Route::get('/teacherhome/sendnote', 'TeacherHomeController@sendnote')->name('teacherhome.sendnote');
Route::post('/teacherhome/sendnote', 'TeacherHomeController@insertnote');

Route::get('/teacherhome/viewnotice', 'TeacherHomeController@viewnotice')->name('teacherhome.viewnotice');

Route::get('/teacherhome/profile', 'TeacherHomeController@profile')->name('teacherhome.profile');

Route::get('/teacherhome/changepassword', 'TeacherHomeController@changepassword')->name('teacherhome.changepassword');
Route::post('/teacherhome/changepassword', 'TeacherHomeController@changepassword');

Route::get('/teacherhome/result', 'TeacherHomeController@result')->name('teacherhome.result');
Route::post('/teacherhome/result', 'TeacherHomeController@insertresult');


//student route

Route::get('/studenthome', 'studenthomecontroller@index')->name('studenthome.index');

Route::get('/studenthome/noticeview', 'studenthomecontroller@noticeview')->name('studenthome.noticeview');

Route::get('/studenthome/noteview', 'studenthomecontroller@noteview')->name('studenthome.noteview');
Route::get('/studenthome/viewresult', 'studenthomecontroller@viewresult')->name('studenthome.viewresult');

Route::get('/studenthome/changepassword', 'studenthomecontroller@changepassword')->name('studenthome.changepassword');
Route::post('/studenthome/changepassword', 'studenthomecontroller@changepassword');


//moderator route

Route::get('/moderatorhome', 'Moderatorcontroller@index')->name('moderator.index');

Route::get('/moderator/content', 'Moderatorcontroller@content')->name('moderator.content');

Route::get('/moderator/admin-msg', 'Moderatorcontroller@admin_msg')->name('moderator.admin-msg');

Route::get('/moderator/user-msg', 'Moderatorcontroller@user_msg')->name('moderator.user-msg');

Route::get('/moderator/changepassword', 'Moderatorcontroller@changepassword')->name('moderator.changepassword');

Route::post('/moderator/changepassword', 'Moderatorcontroller@changepassword');
