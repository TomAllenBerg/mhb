<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MedicalHistoryController;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\AllergyController;
use App\Http\Controllers\ConditionController;

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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
 });

// Routes created to the prescription controller to use functions for modifying and adding entries to the database
Route::post('/prescription/store', [PrescriptionController::class, 'store']);
Route::post('/prescription/edit/{id}', [PrescriptionController::class, 'edit']);
Route::post('/prescription/update/{id}', [PrescriptionController::class, 'update']);
Route::delete('/prescription/delete/{id}', [PrescriptionController::class, 'destroy']);
Route::post('/prescription/refill/{id}', [PrescriptionController::class, 'refill']);
Route::get('/prescriptions', [PrescriptionController::class, 'index']);

// Routes created to the doctor controller to use functions for modifying and adding entries to the database
Route::post('/doctor/store', [DoctorController::class, 'store']);
Route::post('/doctor/edit/{id}', [DoctorController::class, 'edit']);
Route::post('/doctor/update/{id}', [DoctorController::class, 'update']);
Route::delete('/doctor/delete/{id}', [DoctorController::class, 'destroy']);
Route::get('/doctors', [DoctorController::class, 'index']);

// Routes created to the medical history controller to use functions for modifying and adding entries to the database
Route::post('/medical_history/store', [MedicalHistoryController::class, 'store']);
Route::get('/medical_history/edit/{id}', [MedicalHistoryController::class, 'edit']);
Route::post('/medical_history/update/{id}', [MedicalHistoryController::class, 'update']);
Route::delete('/medical_history/delete/{id}', [MedicalHistoryController::class, 'destroy']);
Route::get('/medical_historys', [MedicalHistoryController::class, 'index']);

// Routes created to the surgery controller to use functions for modifying and adding entries to the database
Route::post('/surgeries/store', [SurgeryController::class, 'store']);
Route::get('/surgeries/edit/{id}', [SurgeryController::class, 'edit']);
Route::post('/surgeries/update/{id}', [SurgeryController::class, 'update']);
Route::delete('/surgeries/delete/{id}', [SugeryController::class, 'destroy']);
Route::get('/surgeries', [SurgeryController::class, 'index']);

// Routes created to the allergy controller to use functions for modifying and adding entries to the database
Route::post('/allergies/store', [AllergyController::class, 'store']);
Route::get('/allergies/edit/{id}', [AllergyController::class, 'edit']);
Route::post('/allergies/update/{id}', [AllergyController::class, 'update']);
Route::delete('/allergies/delete/{id}', [AllergyController::class, 'destroy']);
Route::get('/allergies', [AllergyController::class, 'index']);

// Routes created to the condition controller to use functions for modifying and adding entries to the database
Route::post('/conditions/store', [ConditionController::class, 'store']);
Route::get('/conditions/edit/{id}', [ConditionController::class, 'edit']);
Route::post('/conditions/update/{id}', [ConditionController::class, 'update']);
Route::delete('/conditions/delete/{id}', [ConditionController::class, 'destroy']);
