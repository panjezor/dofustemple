<?php

namespace App\Http\Controllers;

use App\Models\User;

class DropController extends Controller
{
    //Return the drop calculator index page
    public function index()
    {
        return view('drop.index');
    }

    //Unused yet.
    public function saveTeam()
    {
        $users = User::whereLocale('pl');
    }
}
