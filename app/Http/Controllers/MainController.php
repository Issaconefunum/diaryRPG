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


class MainController extends Controller
{

    public function profile()
    {
        $id = session('id');
        $character = Character::where('login_id', $id)->first();
        $this->buffDelete($id, $character);
        if ($character->experience >= Lvl::find($character->lvl)->lvlUp){
            $character->increment('strength');
            $character->increment('dexterity');
            $character->increment('intelligence');
            $character->increment('wisdom');
            $character->update([
               'experience' => 0,
            ]);
        }
        return view('main', compact('character'));
    }
    public function buffDelete($id, $character)
    {
        $now = now();
        foreach ($character->buffs as $buff){
            $data = $buff->timeEnd;
            if ($now > $data){
                $character->decrement('strength', $buff->strength);
                $character->decrement('dexterity', $buff->dexterity);
                $character->decrement('intelligence', $buff->intelligence);
                $character->decrement('wisdom', $buff->wisdom);
                $buff->delete();
            }
        }
    }
}

