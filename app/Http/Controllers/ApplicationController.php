<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all();

        return view('applications.index', ['applications' => $applications]);
    }

    public function view($applicationId)
    {
        $application = Application::findOrFail($applicationId);

        return view('applications.view', ['application' => $application]);
    }

    public function create()
    {
        $offers = Offer::all();

        return view('applications.create', ['offers' => $offers]);
    }

    public function store(Request $request)
    {
        $application = Application::create([
            'offer_id' => $request->offer_id,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'cv_url' => $request->cv_url,
            'accepted_policy' => $request->accepted_policy == 'on' ? 1 : 0
        ]);

        return redirect(route('applications'));
    }

    public function edit($applicationId)
    {
        $application = Application::findOrFail($applicationId);
        $offers = Offer::all();

        return view('applications.edit', ['application' => $application, 'offers' => $offers]);
    }

    public function update(Request $request)
    {
        $application = Application::findOrFail($request->application_id);
        $application->update([
            'offer_id' => $request->offer_id,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'cv_url' => $request->cv_url,
            'accepted_policy' => $request->accepted_policy == 'on' ? 1 : 0
        ]);

        return redirect(route('applications'));
    }

    public function delete($applicationId)
    {
        return view('applications.delete', ['applicationId' => $applicationId]);
    }

    public function destroy(Request $request)
    {   
        Application::findOrFail($request->application_id)->delete();

        return redirect(route('applications'));
    }
}
