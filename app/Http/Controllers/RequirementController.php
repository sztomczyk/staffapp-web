<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{
    public function index()
    {
        $requirements = Requirement::all();

        return view('requirements.index', ['requirements' => $requirements]);
    }

    public function create()
    {
        $offers = Offer::all();

        return view('requirements.create', ['offers' => $offers]);
    }

    public function store(Request $request)
    {
        $requirement = Requirement::create([
            'offer_id' => $request->offer_id,
            'name' => $request->name,
            'level' => $request->level
        ]);

        return redirect(route('requirements'));
    }

    public function edit($requirementId)
    {
        $requirement = Requirement::findOrFail($requirementId);
        $offers = Offer::all();

        return view('requirements.edit', ['requirement' => $requirement, 'offers' => $offers]);
    }

    public function update(Request $request)
    {
        $requirement = Requirement::findOrFail($request->requirement_id);
        $requirement->update([
            'offer_id' => $request->offer_id,
            'name' => $request->name,
            'level' => $request->level
        ]);

        return redirect(route('requirements'));
    }

    public function delete($requirementId)
    {
        return view('requirements.delete', ['requirementId' => $requirementId]);
    }

    public function destroy(Request $request)
    {   
        Requirement::findOrFail($request->requirement_id)->delete();

        return redirect(route('requirements'));
    }
}
