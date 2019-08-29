<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Models\MonsterList;
use App\Models\MonsterOwnership;
use App\Models\UserMonsterList;
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

    public function showMyLists(Request $request)
    {

        if ($name = $request->input('add_list_name')) {
            $list = new MonsterList();
            $list->name = $name;
            $list->save();

            $link = new UserMonsterList();
            $link->user_id = Auth::user()->id;
            $link->monster_list_id = $list->id;
            $link->save();
        }
        if ($id = $request->input('delete_list_id')) {
            if(Auth::user()->lists->contains(MonsterList::find($id))) {
                $list = MonsterList::find($id);
                if (Auth::user()->lists->contains())
                    $list->save();

                $link = new UserMonsterList();
                $link->user_id = Auth::user()->id;
                $link->monster_list_id = $list->id;
                $link->save();
            }
        }

        return view('monsters.lists', ['lists' => Auth::user()->lists]);
    }

    public function showAllLists()
    {

        $user = Auth::user();
        if ($user->id !== 1 && $user->id !== 2) { // if user is not admin <- needs changing when i get to
            return abort(403);
        }
        return view('monsters.lists', ['lists' => MonsterList::all()->get()]);
    }

    public function add(Request $request) // check the user to find the current list
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

    public function subtract(Request $request) // check the user to find the current list
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

    public function showList(MonsterList $list)
    {
        return view('monsters.list', ['list' => $list]);
    }

}
