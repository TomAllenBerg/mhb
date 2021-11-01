<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware('api')->group(function () {
    Route::resource('person', PersonController::class);
});

// Routes created for the prescription controller to use functions
Route::post('/prescription/create', 'PrescriptionController@store');
Route::get('/prescription/edit/{id}', 'PrescriptionController@edit');
Route::post('/prescription/update/{id}', 'PrescriptionController@update');
Route::delete('/prescription/delete/{id}', 'PrescriptionController@delete');
Route::get('/prescriptions', 'PrescriptionController@index');


// Routes created for the Medical History controller to use functions
Route::post('/medical_histroy/create', 'Medical_histroyController@store');
Route::get('/medical_histroy/edit/{id}', 'Medical_histroyController@edit');
Route::post('/medical_histroy/update/{id}', 'Medical_histroyController@update');
Route::delete('/medical_histroy/delete/{id}', 'Medical_histroyController@delete');
Route::get('/medical_histroys', 'Medical_histroyController@index');