<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API Routes for BeautyPro
Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
    // Appointments
    Route::apiResource('appointments', 'App\Http\Controllers\Api\AppointmentController');
    
    // Services
    Route::apiResource('services', 'App\Http\Controllers\Api\ServiceController');
    
    // Customers
    Route::apiResource('customers', 'App\Http\Controllers\Api\CustomerController');
    
    // Employees
    Route::apiResource('employees', 'App\Http\Controllers\Api\EmployeeController');
});
