<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    // Rutas para el flujo de Empleados
    Route::get('empleados', [EmployeeController::class, 'GetEmployees']);
    Route::get('empleado/{id}', [EmployeeController::class, 'GetEmployee']);
    Route::post('agregar-empleado', [EmployeeController::class, 'CreateEmployee']);
    Route::put('actualizar-empleado/{id}', [EmployeeController::class, 'UpdateEmployee']);
    Route::delete('eliminar-empleado/{id}', [EmployeeController::class, 'DeleteEmployee']);
});
