<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Repositories\Interfaces\AlmanaxRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public $almanaxRepository;
    public $userRepository;

    public function __construct(AlmanaxRepositoryInterface $almanaxRepository, UserRepositoryInterface $userRepository)
    {
        $this->almanaxRepository = $almanaxRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */


    public function index()
    {
        return view('home')->withTitle('Dofus Temple')->withAlmanaxes($this->almanaxRepository->pickNext(28))->withUserCount($this->userRepository->all()->count())->withUsername(Auth::user()->name ?? '');
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
