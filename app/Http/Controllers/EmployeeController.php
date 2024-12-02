<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Rodyti visų konferencijų sąrašą
    public function index()
    {
        $conferences = [
            ['id' => 1, 'title' => 'Tech Conference 2024', 'date' => '2024-11-01'],
            ['id' => 2, 'title' => 'Science Symposium', 'date' => '2024-12-05'],
        ];
        
        return view('employee.conferences.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = [
            'id' => $id,
            'title' => 'Tech Conference 2024',
            'description' => 'An exciting event about technology and innovation.',
            'date' => '2024-11-01',
            'attendees' => ['John Doe', 'Jane Smith'], // Pavyzdinis registruotų sąrašas
        ];
        
        return view('employee.conferences.show', compact('conference'));
    }
}
