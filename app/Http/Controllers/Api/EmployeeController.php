<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        return response()->json(Employee::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees',
            'phone' => 'required|string',
            'position' => 'required|string',
            'specialties' => 'nullable|array',
            'hire_date' => 'required|date',
            'status' => 'in:active,inactive',
        ]);

        $employee = Employee::create($validated);
        return response()->json($employee, 201);
    }

    public function show(Employee $employee)
    {
        return response()->json($employee);
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name' => 'string',
            'email' => 'email|unique:employees,email,'.$employee->id,
            'phone' => 'string',
            'position' => 'string',
            'specialties' => 'nullable|array',
            'hire_date' => 'date',
            'status' => 'in:active,inactive',
        ]);

        $employee->update($validated);
        return response()->json($employee);
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return response()->json(null, 204);
    }
}
