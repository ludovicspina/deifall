<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use App\Models\Races;
use Illuminate\Http\Request;

class CharacterCreatorController extends Controller
{
    public function index() {
        $races = Races::all();
        $jobs = Jobs::all();
        return view('character_creator', compact('races', 'jobs'));
    }
}
