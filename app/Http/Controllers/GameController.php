<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GameController extends Controller
{
    public function index()
    {
        return view('game/leaderboard');
    }
    
    public function game()
    {
        return view('game/game');
    }
    public function game1()
    {
        return view('game/game1');
    }
    public function game2()
    {
        return view('game/game2');
    }
    public function game3()
    {
        return view('game/game3');
    }
    public function game4()
    {
        return view('game/game4');
    }
    public function game5()
    {
        return view('game/game5');
    }
}
