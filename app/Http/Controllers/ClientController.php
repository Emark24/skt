<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function list() {
        // Dėl šio darbo pirmos dalies grąžiname statinę informaciją
        $conferences = [
            ['title' => 'Conference 1', 'date' => '2023-10-01'],
            ['title' => 'Conference 2', 'date' => '2023-10-10'],
        ];
        return view('client.conferences.index', compact('conferences'));
    }
    
}
