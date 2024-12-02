<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = [
            ['id' => 1, 'title' => 'Tech Conference 2024', 'date' => '2024-11-01'],
            ['id' => 2, 'title' => 'Science Symposium', 'date' => '2024-12-05'],
        ];

        return view('client.conferences.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = [
            'id' => $id,
            'title' => 'Tech Conference 2024',
            'description' => 'An exciting event about technology and innovation.',
            'date' => '2024-11-01',
        ];

        return view('client.conferences.show', compact('conference'));
    }

    public function register($id)
    {
        return redirect()->route('client.conferences')->with('success', 'You have successfully registered for the conference!');
    }
}
