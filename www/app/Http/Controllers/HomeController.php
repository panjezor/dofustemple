<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home', ['title'=>'Dashboard']);
    }

    public function profile()
    {
        return 'not there yet';
    }

    public function todolist()
    {

        return view('to-do', ['title' => 'To-Do list']);
    }
}
