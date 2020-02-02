<?php

namespace App\Http\Controllers;

use App\Models\User;

class DropController extends Controller
{
    public function index()
    {
        return view('drop.index');
    }

    public function saveTeam()
    {
        $users = User::whereLocale('pl');
    }
}
