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
Route::get('/', 'Front\SiteController@ListCourses')->name('site');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard', function(){
    return view('dashboard.index');
    });


    Route::group(['namespace'=> 'Student'], function () {
        Route::get('register', 'StudentRegisterController@register');
        Route::post('register', 'StudentRegisterController@PostRegister')->name('student.register');//admin login

        Route::get('login', 'StudentLoginController@login');
        Route::post('login', 'StudentLoginController@Postlogin')->name('student.login');//admin login
        Route::get('courses/register/{user}/{course}', 'EnrollmentController@enroll')->name('student.enroll');
          });

