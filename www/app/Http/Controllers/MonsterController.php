<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function add(Request $request)
    {
        $monstername = $request->input('name');
        $type = $request->input('type');
        $parentname = $request->input('parent');
        Monster::firstOrCreate();
    }

    public function input()
    {
        return view('monsterinput');
    }
}
