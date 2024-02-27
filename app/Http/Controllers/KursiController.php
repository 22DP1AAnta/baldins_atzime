<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursiController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nosaukums' => 'required|max:255',
            'paskaidrojums' => 'required',
            'banera_adrese' => 'required|url',
            'cilveku_skaits' => 'required|integer',
        ]);

        $kursi = Kursi::create($validated);
        return response()->json($kursi, 201);
    }

    public function index()
    {
        return Kursi::all();
    }
}
