<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Models\MonsterList;
use App\Models\MonsterOwnership;
use App\Models\User;
use App\Models\UserMonsterList;
use Exception;
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

        $normalname = $request->input('normalname');
        $archname = $request->input('archname');
        if ($normalname) {
            $nmonster = Monster::firstOrNew(['monster_name' => $normalname], ['type' => 0]);//0 - normal, 1 - arch, 2 - boss
            $nmonster->save();
        }
        if ($archname) {
            $amonster = Monster::firstOrNew(['monster_name' => $archname], ['type' => 1]);//0 - normal, 1 - arch, 2 - boss$amonster->save();
            $nmonster->save() && $amonster->save();
        }

        if ($normalname && $archname) {
            $nmonster->associate = $amonster->id;
            $amonster->associate = $nmonster->id;

        }
        if ($nmonster->save() && $amonster->save()) {
            return 'true';
        }
        return 'false';


    }

    public function input()
    {
        return view('monsters.monsterinput', ['title' => 'Moby na ochre']);
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

    public function showMyLists(Request $request) // this should go into a facade
    {
        $user = Auth::user();
        if ($name = $request->input('inputListName')) {
            $char_count = $request->input('inputCharCount');
            $list = new MonsterList();
            $list->list_name = $name;
            $list->characters_number = $char_count;
            $list->save();

            $link = new UserMonsterList();
            $link->user_id = $user->id;
            $link->monster_list_id = $list->id;
            $link->save();
        }
        if ($id = $request->input('deleteList')) {
            if ($user->hasList($id)) {
                $list = MonsterList::find($id);
                if ($list) {
                    $list->delete();
                } else {
                    throw new Exception('The list does not exist, go back and try again or contact administrator.');
                };
            }
        }
        $user = User::find($user->id); // old instance of User still holds the relationships, so needs to be initialized again to refresh it.
        $lists = $user->lists;
        return view('monsters.lists', ['lists' => $lists]);

        //sidenote for future development -> assign monsters to dungeons, so people would see if they can run a dun to capture a midmonster
    }

    public
    function showAllLists()
    {

        $user = Auth::user();
        if ($user->id !== 1 && $user->id !== 2) { // if user is not admin <- needs changing when i get to
            return abort(403);
        }

        return view('monsters.lists', ['lists' => MonsterList::all()->get()]);
    }

    public
    function add(MonsterList $list, Monster $monster) // check the user to find the current list
    {
        $user = Auth::user();
        if ($list && $monster && $user->hasList($list->id)) {
            $ownership = new MonsterOwnership(['monster_id' => $monster->id]);
            $list->ownerships()->save($ownership);
            return 'true';
        }
        return 'false';
    }

    public
    function subtract(MonsterList $list, Monster $monster) // check the user to find the current list
    {
        $user = Auth::user();
        if ($list && $monster && $user->hasList($list->id)) {
            $ownership = MonsterOwnership::
            where('monster_id', $monster->id)
                ->where('monster_list_id', $list->id)->first();
            $ownership->delete();
            return 'true';
        }
        return 'false';
    }

    public
    function showList(MonsterList $list)
    {
        return view('monsters.list', ['list' => $list]);
    }

}
