<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return view('departments.index', ['departments' => $departments]);
    }

    public function create()
    {
        $departments = Department::all();

        return view('departments.create', ['departments' => $departments]);
    }

    public function store(Request $request)
    {
        $department = Department::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id == 0 ? null : $request->parent_id
        ]);

        return redirect(route('departments'));
    }

    public function edit($departmentId)
    {
        $department = Department::findOrFail($departmentId);
        $departments = Department::all();

        return view('departments.edit', ['department' => $department, 'departments' => $departments]);
    }

    public function update(Request $request)
    {
        $department = Department::findOrFail($request->department_id);
        $department->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id == 0 ? null : $request->parent_id
        ]);

        return redirect(route('departments'));
    }

    public function delete($departmentId)
    {
        return view('departments.delete', ['departmentId' => $departmentId]);
    }

    public function destroy(Request $request)
    {   
        $department = Department::findOrFail($request->departmentId);
        Department::where('parent_id', $request->departmentId)->update(['parent_id' => null]);
        $department->delete();

        return redirect(route('departments'));
    }
}
