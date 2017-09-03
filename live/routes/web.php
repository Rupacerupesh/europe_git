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

Route::get('/', 'FrontController@index');
Route::get('/apply', 'FrontController@applyNow');
Route::get('/contact_us', 'FrontController@contact_us');
Route::post('apply', 'FrontController@storeApplication');
Route::get('/chat', function () {
    return view('chat');
});
// Route::get('institution', 'FrontController@institution');
Route::get('institution/{name}', 'InstitutionController@institution_details');
// Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::get('logout', 'Auth\LoginController@logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::group(['middleware'=>['auth']],function() {
    Route::get('/home', 'DashboardController@index');
    Route::resource('/home/applications', 'ApplicationController');
    Route::resource('/home/navigation', 'NavigationController');
    Route::resource('/home/advertisement', 'AdvertisementController');
    Route::resource('/home/country', 'CountryController');
    Route::resource('/home/educationlevel', 'EducationLevelController');
    Route::resource('/home/interestedcourse', 'InterestedCourseController');
    Route::resource('/home/testimonial', 'TestimonialController');
    Route::resource('/home/banner', 'BannerController');
    Route::resource('/home/institution', 'InstitutionController');
    Route::get('/home/institution/{id}/add_more', ['as' => 'institution.addMore', 'uses' => 'InstitutionController@addMore']);
    Route::post('/home/institution/store_more', ['as' => 'institution.storeMore', 'uses' => 'InstitutionController@store_more']);
    Route::resource('/home/facility', 'FacilityController');
    Route::resource('/home/course', 'CourseController');
});

