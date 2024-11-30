<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all(); // Gaukite visas konferencijas
        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
        ]);

        Conference::create($request->all());

        return redirect()->route('admin.conferences.index')->with('success', 'Conference created successfully!');
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string',
        ]);

        $conference = Conference::findOrFail($id);
        $conference->update($request->all());

        return redirect()->route('admin.conferences.index')->with('success', 'Conference updated successfully!');
    }

    public function destroy($id)
    {
        $conference = Conference::findOrFail($id);

        if ($conference->date > now()) {
            $conference->delete();
            return redirect()->route('admin.conferences.index')->with('success', 'Conference deleted successfully!');
        } else {
            return redirect()->route('admin.conferences.index')->with('error', 'Cannot delete past conferences!');
        }
    }
}
