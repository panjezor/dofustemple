<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonsterController extends Controller
{
    public function add(Request $request){

    }
    public function input(){
        return view('monsterinput');
    }
}
