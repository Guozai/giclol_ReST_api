<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('cors')->get('announcement', 'AnnouncementAPIController@fetch');
Route::middleware('cors')->post('announcement/update', 'AnnouncementAPIController@update');
Route::middleware('cors')->get('about', 'AboutAPIController@fetch');
Route::middleware('cors')->post('about/update', 'AboutAPIController@update');

Route::group(['middleware' => 'cors'], function () {
// List
    Route::get('registrationCRUD/list','RegistrationCRUDController@index');
// Show
    Route::get('registrationCRUD/{id}', 'RegistrationCRUDController@show');
// Store
    Route::post('registrationCRUD', 'RegistrationCRUDController@store');
// Update
    Route::post('registrationCRUD/{id}/update', 'RegistrationCRUDController@update');
// Delete
    Route::post('registrationCRUD/{id}/delete', 'RegistrationCRUDController@destroy');
});

Route::group(['middleware' => 'cors'], function () {
// List
    Route::get('resultCRUD/list','ResultCRUDController@index');
// Show
    Route::get('resultCRUD/{id}', 'ResultCRUDController@show');
// Store
    Route::post('resultCRUD', 'ResultCRUDController@store');
// Update
    Route::post('resultCRUD/{id}/update', 'ResultCRUDController@update');
// Delete
    Route::post('resultCRUD/{id}/delete', 'ResultCRUDController@destroy');
});