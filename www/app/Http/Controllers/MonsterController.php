<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Models\MonsterList;
use App\Models\MonsterOwnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MonsterController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */
    public function addmob(Request $request)
    {
        $name = $request->input('name');
        if ($name) {
            $monster = Monster::firstOrNew(['monster_name' => $name], ['type' => $request->input('type')]);//0 - normal, 1 - arch, 2 - boss
            $monster->save();
            return 'true';
        }
        return 'false';
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

    public function showMyLists()
    {
        return view('monsters.lists', ['lists' => MonsterList::listsForUser(Auth::user())]);
    }

    public function showAllLists()
    {

        $user = Auth::user();
        if ($user->id !== 1 && $user->id !== 2) { // if user is not admin <- needs changing when i get to
            return abort(403);
        }
        return view('monsters.lists', ['lists' => MonsterList::all()->get()]);
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

    public function showList($list)
    {
        $user = Auth::user();
        return view('monsters.lists', ['lists' => MonsterList::myLists()]);
    }

}
