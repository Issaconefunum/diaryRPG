<?php

namespace App\Http\Controllers;

use App\Models\Authorization;
use App\Models\Buff;
use App\Models\Character;
use App\Models\Lvl;
use App\Models\lvlSkill;
use App\Models\Skill;
use App\Models\Task;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class BuffController extends Controller
{

    public function index()
    {
        $id = session('id');
        $buffs = Buff::where('character_id', $id)->get();
        return view('buffs.index', compact('buffs'));
    }

    public function create()
    {
        return view('buffs.create');
    }

    public function show(Buff $buff)
    {
        return view('buffs.show', compact('buff'));
    }
    public function store(){
        $data = request()->validate([
            'name' => 'string',
            'strength' => 'int',
            'dexterity' => 'int',
            'intelligence' => 'int',
            'wisdom' => 'int',
            'specialEffect' => 'string',
            'timeOfAction' => '',
        ]);

        $i = $data['timeOfAction'];
        $hour = (int)(mb_substr($i, 0, 2));
        $minute = (int)(mb_substr($i, 3, 2));
        $second = (int)(mb_substr($i, 6, 2));
        $now = now();
        $now->addHour($hour)->addMinute($minute)->addSecond($second);

        Buff::create([
            'name' => $data['name'],
            'strength' => $data['strength'],
            'dexterity' => $data['dexterity'],
            'intelligence' => $data['intelligence'],
            'wisdom' => $data['wisdom'],
            'specialEffect' => $data['specialEffect'],
            'timeOfAction' => $data['timeOfAction'],
                'timeEnd' => $now,
                'character_id' => session('id')
            ]);

        $character = Character::find(session('id'));
        $character->increment('strength', $data['strength']);
        $character->increment('dexterity', $data['dexterity']);
        $character->increment('intelligence', $data['intelligence']);
        $character->increment('wisdom', $data['wisdom']);
        return redirect()->route('buff.index');
    }
    public function edit(Buff $buff)
    {
        return view('buffs.edit', compact('buff'));
    }
    public function upload(Buff $buff)
    {
        $data = request()->validate([
            'name' => 'string',
            'strength' => 'int',
            'dexterity' => '',
            'intelligence' => '',
            'wisdom' => '',
            'specialEffect' => '',
            'timeOfAction' => 'string',]);

        $i = $data['timeOfAction'];
        $hour = (int)(mb_substr($i, 0, 2));
        $minute = (int)(mb_substr($i, 3, 2));
        $second = (int)(mb_substr($i, 6, 2));
        $now = now();
        $now->addHour($hour)->addMinute($minute)->addSecond($second);

        $buff->update([
            'name' => $data['name'],
            'strength' => $data['strength'],
            'dexterity' => $data['dexterity'],
            'intelligence' => $data['intelligence'],
            'wisdom' => $data['wisdom'],
            'specialEffect' => $data['specialEffect'],
            'timeOfAction' => $data['timeOfAction'],
            'timeEnd' => $now,
        ]);
        return redirect()->route('buff.index', $buff->id_buff);
    }
    public function delete(Buff $buff)
    {
        $buff->delete();
        return redirect()->route('buff.index');
    }

}

