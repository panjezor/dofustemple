<?php

namespace App\Http\Controllers;

use App\Models\Monster;
use App\Models\MonsterList;
use App\Models\MonsterOwnership;
use App\Models\User;
use App\Models\UserMonsterList;
use App\Repositories\Interfaces\MonsterListRepositoryInterface;
use App\Repositories\Interfaces\MonsterOwnershipRepositoryInterface;
use App\Repositories\Interfaces\MonsterRepositoryInterface;
use App\Repositories\Interfaces\UserMonsterListRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MonsterController extends Controller
{

    public $monsterRepository;
    public $monsterListRepository;
    public $monsterOwnershipRepository;
    public $userMonsterListRepository;
    public $userRepository;

    public function __construct(MonsterRepositoryInterface $monsterRepository, MonsterOwnershipRepositoryInterface $monsterOwnershipRepository, MonsterListRepositoryInterface $monsterListRepository, UserMonsterListRepositoryInterface $userMonsterListRepository, UserRepositoryInterface $userRepository)
    {
        parent::__construct();
        $this->monsterListRepository = $monsterListRepository;
        $this->monsterRepository = $monsterRepository;
        $this->monsterOwnershipRepository = $monsterOwnershipRepository;
        $this->userMonsterListRepository = $userMonsterListRepository;
        $this->userRepository = $userRepository;
    }

    /** Adding related archs and normals.
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

    // input for adding the arch and related monsters.
    public function input()
    {
        return view('monsters.monsterinput', ['title' => 'Moby na ochre']);
    }

    /** Show all archmonsters and relateds.
     * @return Factory|View
     */
    public function showArch()
    {
        // we assume that every arch will have an associate
        $monsters = $this->monsterRepository->archMonsters();
        return view('monsters.showarchs', ['monsters' => $monsters, 'title' => 'Lista archow']);
    }

    /** Show all monsters for the manager
     * @return Factory|View
     */
    public function showAll()
    {
        $monsters = Monster::orderBy('monster_name')->get();
        return view('monsters.ochrehelper', ['monsters' => $monsters]);
    }

    // show all lists
    public function showLists(Request $request) // this should go into a facade
    {
        //TODO: request validation, splitting adds and deletes to then redirect, fill it and use create instead of "new"
        $user = Auth::user();
        if ($name = $request->input('inputListName')) {
            $char_count = $request->input('inputCharCount');

            $list = new MonsterList();
            $list->name = $name;
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
                }
            }
        }
        $user = User::find($user->id); // old instance of User still holds the relationships, so needs to be initialized again to refresh it.
        $lists = $user->lists;
        if ($user->isDev()) {
            $lists = MonsterList::all();
        }
        return view('monsters.lists', ['lists' => $lists]);

        //sidenote for future development -> assign monsters to dungeons, so people would see if they can run a dun to capture a midmonster
    }

    /** Add new monsters to the list
     * @param MonsterList $list
     * @param Monster $monster
     * @return boolean
     */
    public function add(MonsterList $list, Monster $monster)
    {
        $user = Auth::user();
        // both list and monster should be valid, + then another check if the user can perform the action.
        if ($list && $monster && $user->hasList($list->id)) {
            $list->monsters()->attach($monster->id);
            return 'true';
        }
        return 'false';
    }

    /** Take a monster off a list.
     * @param MonsterList $list
     * @param Monster $monster
     * @return boolean
     */
    public function subtract(MonsterList $list, Monster $monster)
    {
        $user = Auth::user();
        if ($list && $monster && $user->hasList($list->id)) {
            // we cant use detach as it would destroy all the links, instead of just one.
            $ownership = MonsterOwnership::
            where('monster_id', $monster->id)
                ->where('monster_list_id', $list->id)->first();
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
