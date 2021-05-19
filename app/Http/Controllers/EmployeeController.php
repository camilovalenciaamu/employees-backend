<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function GetEmployees()
    {
        $employees = Employee::all();
        return response()->json($employees, 200);
    }

    public function GetEmployee($id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        return response()->json($employee, 200);
    }

    public function CreateEmployee(EmployeeRequest $request, Employee $employee)
    {
        return response()->json($employee->create($request->validated()), 200);
    }

    public function UpdateEmployee(EmployeeRequest $request, Employee $employee, $id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        return response()->json($employee->update($request->validated()), 200);
    }

    public function DeleteEmployee($id)
    {
        $employee = Employee::find($id);
        if (!$employee) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        return response()->json(['employee' => $employee->delete(), 'message' => 'Empleado eliminado correctamente'], 200);
    }
}
