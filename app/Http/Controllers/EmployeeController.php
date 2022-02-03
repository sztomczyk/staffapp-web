<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Position;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', ['employees' => $employees]);
    }

    public function create()
    {
        $positions = Position::all();

        return view('employees.create', ['positions' => $positions]);
    }

    public function store(Request $request)
    {
        $employee = Employee::create([
            'position_id' => $request->position_id,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect(route('employees'));
    }

    public function edit($employeeId)
    {
        $employee = Employee::findOrFail($employeeId);
        $positions = Position::all();

        return view('employees.edit', ['employee' => $employee, 'positions' => $positions]);
    }

    public function update(Request $request)
    {
        $employee = Employee::findOrFail($request->employee_id);
        $employee->update([
            'position_id' => $request->position_id,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect(route('employees'));
    }

    public function delete($employeeId)
    {
        return view('employees.delete', ['employeeId' => $employeeId]);
    }

    public function destroy(Request $request)
    {   
        Employee::findOrFail($request->employee_id)->delete();

        return redirect(route('employees'));
    }
}
