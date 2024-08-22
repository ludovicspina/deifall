<?php

namespace App\Http\Controllers;

use App\Models\Adventures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdventureController extends Controller
{
    public function create()
    {
        return view('adventures.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $adventure = new Adventures();
        $adventure->user_id = Auth::id();
        $adventure->name = $request->name;
        $adventure->description = $request->description;
        $adventure->save();

        return redirect()->route('adventures.create')->with('success', 'Adventure created successfully!');
    }
}
