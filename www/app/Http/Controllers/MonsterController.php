<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Models\MonsterOwnership;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function addmob(Request $request)
    {
        $name = $request->input('name');
        if ($name) {
            $monster = Monster::firstOrNew(['monster_name' => $name], ['type' => 2]);//0 - normal, 1 - arch, 2 - boss
            $monster->save();
            return 'gites';
        }
    }

    public function input()
    {
        return view('monsterinput', ['title' => 'Moby na ochre']);
    }

    public function showArch()
    {
        $monsters = Monster::allArchs();
        //dd($monsters);
        return view('showarchs', ['monsters' => $monsters, 'title' => 'Lista archow']);
    }

    public function showAll()
    {
        $monsters = Monster::orderBy('monster_name')->get();
        return view('ochrehelper', ['monsters' => $monsters]);
    }

    public function add(Request $request)
    {
        if ($request->input('monster_id') && $request->input('user_id')) {
            $ownership = new MonsterOwnership(
                ['monster_id' => $request->input('monster_id'),
                    'user_id' => $request->input('user_id')]
            );
            $ownership->save();
            return 'true';
        }
        return 'false';
    }

    public function subtract(Request $request)
    {
        if ($request->input('monster_id') && $request->input('user_id')) {
            $ownership = MonsterOwnership::
                  where('monster_id', $request->input('monster_id'))
                ->where('user_id', $request->input('user_id'))->first();
            $ownership->delete();
            return 'true';
        }
        return 'false';
    }
}
