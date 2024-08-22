<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'STR' => 'required|integer',
            'DEX' => 'required|integer',
            'CON' => 'required|integer',
            'INT' => 'required|integer',
            'SAG' => 'required|integer',
            'CHA' => 'required|integer',
        ]);

        $item = new Items();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->STR = $request->STR;
        $item->DEX = $request->DEX;
        $item->CON = $request->CON;
        $item->INT = $request->INT;
        $item->SAG = $request->SAG;
        $item->CHA = $request->CHA;
        $item->save();

        return redirect()->route('adventures.create')->with('success', 'Adventure created successfully!');
    }
}
