<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Department;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::all();

        return view('positions.index', ['positions' => $positions]);
    }

    public function create()
    {
        $departments = Department::all();

        return view('positions.create', ['departments' => $departments]);
    }

    public function store(Request $request)
    {
        $position = Position::create([
            'name' => $request->name,
            'department_id' => $request->department_id
        ]);

        return redirect(route('positions'));
    }

    public function edit($positionId)
    {
        $position = Position::findOrFail($positionId);
        $departments = Department::all();

        return view('positions.edit', ['position' => $position, 'departments' => $departments]);
    }

    public function update(Request $request)
    {
        $position = Position::findOrFail($request->position_id);
        $position->update([
            'name' => $request->name,
            'department_id' => $request->department_id
        ]);

        return redirect(route('positions'));
    }

    public function delete($positionId)
    {
        return view('positions.delete', ['positionId' => $positionId]);
    }

    public function destroy(Request $request)
    {   
        Position::findOrFail($request->positionId)->delete();

        return redirect(route('positions'));
    }
}
