<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    // READ (list)
    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaign.index', compact('campaigns'));
    }

    // CREATE (form)
    public function create()
    {
        return view('campaign.create');
    }

    // STORE (insert)
    public function store(Request $request)
    {
        Campaign::create($request->all());

        return redirect('/campaign')
            ->with('success', 'Data berhasil ditambahkan');
    }

    // EDIT (form edit)
    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);

        return view('campaign.edit', compact('campaign'));
    }

    // UPDATE (update data)
    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);

        $campaign->update([
            'title' => $request->title,
            'description' => $request->description,
            'target_donation' => $request->target_donation,
            'collected_donation' => $request->collected_donation,
            'deadline' => $request->deadline,
        ]);

        return redirect('/campaign')
            ->with('success', 'Data berhasil diupdate');
    }

    // DELETE
    public function destroy($id)
    {
        Campaign::destroy($id);

        return redirect('/campaign')
            ->with('success', 'Data berhasil dihapus');
    }
}