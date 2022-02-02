<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('applications.index');
    }

    public function create()
    {
        return view('applications.create');
    }

    public function store()
    {
        //
    }

    public function edit()
    {
        return view('applications.edit');
    }

    public function update()
    {
        //
    }

    public function delete()
    {
        return view('applications.delete');
    }

    public function destroy()
    {
        //
    }
}
