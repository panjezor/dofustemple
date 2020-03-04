<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
session();
        return view('home', ['title' => 'Dofus Temple']);
    }

    public function profile()
    {
        return 'not there yet';
    }

    public function toDoList(Request $request)
    {
        if ($request->description && $request->title) {
            Todo::firstOrCreate(['description' => $request->description], ['title' => $request->title, 'created_by' => Auth::user()->id]);
        }
        return view('to-do', ['title' => 'To-Do list']);
    }
}
