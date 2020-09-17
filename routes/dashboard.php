<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['namespace'=> 'Dashboard'], function (){
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    #### Vendors Route ###########
Route::group(['prefix' => '/courses'], function () {
    Route::get('/', 'CoursesController@index')->name('admin.courses');
     Route::get('/create', 'CoursesController@create')->name('admin.courses.create');
    Route::post('/store', 'CoursesController@store')->name('admin.courses.store');
    Route::get('/edit/{id}', 'CoursesController@edit')->name('admin.courses.edit');
    Route::post('/updated/{id}', 'CoursesController@update')->name('admin.courses.update');
    Route::get('/delete/{id}', 'CoursesController@destroy')->name('admin.courses.destroy');

});
#### end Vendors Route ###########
Route::group(['prefix' => '/students'], function () {
    Route::get('/', 'StudentController@index')->name('admin.students');
    Route::get('/enroll', 'StudentController@enrollement')->name('admin.students.enroll');

});
});


Route::group(['namespace'=> 'Dashboard', 'middleware'=> 'guest:admin'], function () {
    Route::get('login', 'LoginController@login');
    Route::post('login', 'LoginController@Postlogin')->name('admin.login');//admin login
 });


