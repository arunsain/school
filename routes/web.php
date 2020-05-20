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

Route::get('/','SchoolController@index')->name('/');
Route::get('/events','SchoolController@events')->name('events');
Route::get('/singleEvents/{id}','SchoolController@singleEvents')->name('singleEvents');
Route::get('/gallery','SchoolController@gallery')->name('gallery');
Route::get('/admission','SchoolController@admission')->name('admission');
Route::get('/about','SchoolController@about')->name('about');
Route::get('/contact-us','SchoolController@contact')->name('contact');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->namespace('Admin')->group(function(){

  Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
  Route::post('login', 'LoginController@login')->name('admin.login');
  Route::post('logout', 'LoginController@logout')->name('admin.logout');


  Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');
  Route::post('password/reset', 'ResetPasswordController@reset')->name('admin.password.update');
  


});

Route::prefix('admin')->namespace('Admin')->group(function(){

 Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
 //Route::get('main', 'AdminController@main');
 Route::get('MainPage-create', 'MainPageController@index')->name('MainPage.create');
 Route::post('MainPage-update', 'MainPageController@update')->name('MainPage.update');
 Route::get('banner-index', 'BannerController@index')->name('banner.index');

 Route::get('banner-create', 'BannerController@create')->name('banner.create');
 Route::post('banner-store', 'BannerController@store')->name('banner.store');
 Route::get('principal-update', 'PrincipalController@create')->name('principal.create');
 Route::post('principal-store', 'PrincipalController@store')->name('principal.store');
 Route::get('teacher-create', 'TeacherController@create')->name('teacher.create');
 Route::post('teacher-store', 'TeacherController@store')->name('teacher.store');
 Route::get('teacher-list', 'TeacherController@index')->name('teacher.index');
  Route::get('eventscat-create', 'EventsCatController@create')->name('eventscat.create');
  Route::post('eventcat-store', 'EventsCatController@store')->name('eventscat.store');
  Route::get('eventscontent-create', 'EventsContentController@create')->name('eventscontent.create');
  Route::get('eventscontent-show', 'EventsContentController@show')->name('eventscontent.show');
  Route::post('eventscontent-edit', 'EventsContentController@edit')->name('eventscontent.edit');
  Route::post('eventscontent-store', 'EventsContentController@store')->name('eventscontent.store');
   Route::get('add-admission', 'AdmissionPageController@create')->name('add-admission.create');
    Route::post('admission-store', 'AdmissionPageController@store')->name('admission.store');
     Route::get('gallery-page', 'GalleryController@create')->name('gallery.create');
     Route::get('gallery-list', 'GalleryController@index')->name('gallery.index');
     Route::post('gallery-store', 'GalleryController@store')->name('gallery.store');
     Route::get('gallery-delete/{id}', 'GalleryController@destroy')->name('gallery.delete');
     Route::get('gallery-content', 'GalleryController@content')->name('gallery.content');
     Route::post('gallery-update', 'GalleryController@update')->name('gallery.update');
     Route::get('about-create', 'AboutController@create')->name('about.create');
      Route::post('about-store', 'AboutController@store')->name('about.store');
      Route::get('contact-create', 'ContactController@create')->name('contact.create');
     Route::post('contact-store', 'ContactController@store')->name('contact.store');
      Route::get('add-class', 'ClassController@create')->name('class.create');
      Route::post('class-store', 'ClassController@store')->name('class.store');
       Route::get('subject-add', 'SubjectController@create')->name('subject.create');
        Route::post('subject-store', 'SubjectController@store')->name('subject.store');
        Route::get('assign-subject', 'AssignTeacherSubjectController@create')->name('assign.subject');
         Route::post('assign-subject-store', 'AssignTeacherSubjectController@store')->name('assign.subject.store');
         Route::get('create-timetable', 'TimetableController@create')->name('create.timetable');
         Route::post('store-timetable', 'TimetableController@store')->name('store.timetable');
          Route::post('ajax-getTeacher', 'TimetableController@getTeacher')->name('ajax.getTeacher');
        Route::get('timetable', 'TimetableController@index')->name('index.timetable');
        Route::get('show-timetable', 'TimetableController@show')->name('show.timetable');
       Route::get('update-timetable', 'TimetableController@update')->name('update.timetable');  

       Route::post('getTimeTable', 'TimetableController@getTimeTable')->name('getTimeTable');  
        

      //  getTimeTable
      


      //  Route::post('login', 'Auth\admin\LoginController@login');
      //  Route::post('logout', 'Auth\admin\LoginController@logout')->name('admin.logout');


});


Route::prefix('teacher')->namespace('Teacher')->group(function(){

 Route::get('login', 'LoginController@showLoginForm')->name('login');
 Route::post('login', 'LoginController@login')->name('teacher.login');
 Route::post('logout', 'LoginController@logout')->name('logout');


 Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('teacher.password.request');
 Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('teacher.password.email');
 Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('teacher.password.reset');
 Route::post('password/reset', 'ResetPasswordController@reset')->name('teacher.password.update');


});


Route::prefix('teacher')->namespace('Teacher')->group(function(){

 Route::get('dashboard', 'TeacherController@index')->name('teacher.dashboard');
      //  Route::post('login', 'Auth\admin\LoginController@login');
      //  Route::post('logout', 'Auth\admin\LoginController@logout')->name('admin.logout');


});



Route::prefix('student')->namespace('Student')->group(function(){

 Route::get('dashboard', 'StudentController@index')->name('student.dashboard');
});







Route::prefix('student')->namespace('Student')->group(function(){

 Route::get('student-login', 'LoginController@showLoginForm')->name('student.login');
 Route::post('students-login', 'LoginController@login')->name('students.login');
 Route::post('logout', 'LoginController@logout')->name('student.logout');


 Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('student.password.request');
 Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
 Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('student.password.reset');
 Route::post('password/reset', 'ResetPasswordController@reset')->name('student.password.update');


});