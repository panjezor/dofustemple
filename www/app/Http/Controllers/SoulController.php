<?php

namespace App\Http\Controllers;

use App\Models\Soul;
use App\Models\SoulOwnership;
use Illuminate\Http\Request;

class SoulController extends Controller
{
    public function addmob(Request $request)
    {
        $name = $request->input('name');
        if ($name) {
            $soul = Soul::firstOrNew(['soul_name' => $name], ['type' => 2]);//0 - normal, 1 - arch, 2 - boss
            $soul->save();
            return 'gites';
        }
    }

    public function input()
    {
        return view('soulinput', ['title' => 'Moby na ochre']);
    }

    public function showArch()
    {
        $souls = Soul::allArchs();
        //dd($souls);
        return view('showarchs', ['souls' => $souls, 'title' => 'Lista archow']);
    }

    public function showAll()
    {
        $souls = Soul::orderBy('soul_name')->get();
        return view('ochrehelper', ['souls' => $souls]);
    }

    public function add(Request $request)
    {
        if ($request->input('soul_id') && $request->input('user_id')) {
            $ownership = new SoulOwnership(
                ['soul_id' => $request->input('soul_id'),
                    'user_id' => $request->input('user_id')]
            );
            $ownership->save();
            return 'true';
        }
        return 'false';
    }

    public function subtract(Request $request)
    {
        if ($request->input('soul_id') && $request->input('user_id')) {
            $ownership = SoulOwnership::
                  where('soul_id', $request->input('soul_id'))
                ->where('user_id', $request->input('user_id'))->first();
            $ownership->delete();
            return 'true';
        }
        return 'false';
    }
}
