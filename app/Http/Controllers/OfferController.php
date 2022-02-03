<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::all();

        return view('offers.index', ['offers' => $offers]);
    }

    public function create()
    {
        $positions = Position::all();

        return view('offers.create', ['positions' => $positions]);
    }

    public function store(Request $request)
    {
        $offer = Offer::create([
            'position_id' => $request->position_id,
            'location' => $request->location,
            'work_plan' => $request->work_plan,
            'work_mode' => $request->work_mode,
            'contract_type' => $request->contract_type,
            'recruitment_type' => $request->recruitment_type,
            'salary_from' => $request->salary_from,
            'salary_to' => $request->salary_to,
            'expires_at' => $request->expires_at
        ]);

        return redirect(route('offers'));
    }

    public function edit($offerId)
    {
        $offer = Offer::findOrFail($offerId);
        $positions = Position::all();

        return view('offers.edit', ['offer' => $offer, 'positions' => $positions]);
    }

    public function update(Request $request)
    {
        $offer = Offer::findOrFail($request->offer_id);
        $offer->update([
            'position_id' => $request->position_id,
            'location' => $request->location,
            'work_plan' => $request->work_plan,
            'work_mode' => $request->work_mode,
            'contract_type' => $request->contract_type,
            'recruitment_type' => $request->recruitment_type,
            'salary_from' => $request->salary_from,
            'salary_to' => $request->salary_to,
            'expires_at' => $request->expires_at
        ]);

        return redirect(route('offers'));
    }

    public function delete($offerId)
    {
        return view('offers.delete', ['offerId' => $offerId]);
    }

    public function destroy(Request $request)
    {   
        Offer::findOrFail($request->offer_id)->delete();

        return redirect(route('offers'));
    }
}
