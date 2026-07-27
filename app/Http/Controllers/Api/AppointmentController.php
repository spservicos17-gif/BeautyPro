<?php

namespace App\Http\Controllers\Api;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $query = Appointment::query();

        if ($request->has('date')) {
            $query->whereDate('appointment_date', $request->date);
        }

        if ($request->has('employee_id')) {
            $query->where('employee_id', $request->employee_id);
        }

        return response()->json($query->with(['customer', 'employee', 'service'])->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'employee_id' => 'required|exists:employees,id',
            'service_id' => 'required|exists:services,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:Y-m-d H:i:s',
            'status' => 'in:scheduled,completed,cancelled,no-show',
            'notes' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        $appointment = Appointment::create($validated);
        return response()->json($appointment->load(['customer', 'employee', 'service']), 201);
    }

    public function show(Appointment $appointment)
    {
        return response()->json($appointment->load(['customer', 'employee', 'service']));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $validated = $request->validate([
            'customer_id' => 'exists:customers,id',
            'employee_id' => 'exists:employees,id',
            'service_id' => 'exists:services,id',
            'appointment_date' => 'date',
            'appointment_time' => 'date_format:Y-m-d H:i:s',
            'status' => 'in:scheduled,completed,cancelled,no-show',
            'notes' => 'nullable|string',
            'price' => 'numeric|min:0',
        ]);

        $appointment->update($validated);
        return response()->json($appointment->load(['customer', 'employee', 'service']));
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return response()->json(null, 204);
    }
}
