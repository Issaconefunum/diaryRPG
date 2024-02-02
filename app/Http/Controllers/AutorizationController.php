<?php

namespace App\Http\Controllers;

use App\Models\Authorization;
use App\Models\Buff;
use App\Models\Character;
use App\Models\Lvl;
use App\Models\lvlSkill;
use App\Models\Skill;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class AutorizationController extends Controller
{

    public function create()
    {
        return view('authorizationCreate');
    }
    public function enter()
    {
        return view('enter');
    }
    public function store()
    {
        $data = request()->validate([
            'login' => '',
            'password' => '',
            'name' => '',
            'class' => ''
        ]);
        Authorization::create([
            'login' => $data['login'],
            'password' => $data['password']
        ]);
        $authorization = Authorization::orderby('id', 'desc')->first();
        Character::create([
            'login_id' => $authorization->id,
            'name' => $data['name'],
            'experience' => 0,
            'race_id' => $data['class'],
            'strength' => 1,
            'dexterity' => 1,
            'intelligence' => 1,
            'wisdom' => 1,
            'lvl' => 1,
        ]);
        return redirect()->route('authorization.enter');
    }
    public function check()
    {
        $data = request()->validate([
            'login' => '',
            'password' => '',
        ]);
        $login = Authorization::where('login', $data['login'])->where('password', $data['password'])->firstOrFail();
        $character = Character::where('login_id', $login->id)->firstOrFail();

        session(['id'=> $character->login_id]);



        return redirect()->route('main.profile', ['id'=> $character->login_id]);
        #return view('main', compact('character'));

    }
}

