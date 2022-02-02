<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('departments.index');
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store()
    {
        //
    }

    public function edit()
    {
        return view('departments.edit');
    }

    public function update()
    {
        //
    }

    public function delete()
    {
        return view('departments.delete');
    }

    public function destroy()
    {
        //
    }
}
