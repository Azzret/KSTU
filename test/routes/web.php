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

Route::get('/software', function () {
    return view('software.index');
});

Route::group(['middleware' => ['admin']], function () {
    Route::resource('/car', 'CarController')->except([
        'index', 'show'
    ]);
});

Route::resource('/car', 'CarController')->only([
    'index', 'show'
]);

Route::group(['middleware' => ['admin']], function () {
    Route::resource('/applicant', 'ApplicantController')->except([
        'index', 'show'
    ]);
});

Route::resource('/applicant', 'ApplicantController')->only([
    'index', 'show', 'create',
]);

Route::group(['middleware' => ['admin']], function () {
    Route::resource('/openDay', 'OpenDayController')->except([
        'index', 'show'
    ]);
});

Route::resource('/openDay', 'OpenDayController')->only([
    'index', 'show',
]);

Route::get('/specialties', 'SpecialtyController@ajax');

Route::get('/user', function () {
    return view('auth.edit');
});


Route::post('/buy/{id}', 'CarController@buy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

