<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\MedicalHistroyController;

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
Route::get('/prescriptions', [PrescriptionController::class, 'index']);

// Routes created to the medical history controller to use functions for modifying and adding entries to the database
Route::post('/medical_history/create', [MedicalHistroyController::class, 'store']);
Route::get('/medical_history/edit/{id}', [MedicalHistroyController::class, 'edit']);
Route::post('/medical_history/update/{id}', [MedicalHistroyController::class, 'update']);
Route::delete('/medical_history/delete/{id}', [MedicalHistroyController::class, 'destroy']);
Route::get('/medical_historys', [MedicalHistroyController::class, 'index']);