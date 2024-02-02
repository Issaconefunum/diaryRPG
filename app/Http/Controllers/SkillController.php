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
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{

    public function index()
    {
        $id = session('id');
        $skills = Skill::where('character_id', $id)->get();
        return view('skill.index', compact('skills'));
    }

    public function create()
    {
        return view('skill.create');
    }

    public function show(Skill $skill)
    {
        return view('skill.show', compact('skill'));
    }
    public function store(){
        echo 'hello';
        $data = request()->validate([
            'name' => '',
            'description' => '',
            'lastUsed' => '',
            'lvlSkill_id' => ''
        ]);
        Skill::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'lastUsed' => $data['lastUsed'],
            'lvlSkill_id' => $data['lvlSkill_id'],
                'character_id' => session('id')
            ]);
        return redirect()->route('skill.index');
    }
    public function edit(Skill $skill)
    {
        return view('skill.edit', compact('skill'));
    }
    public function upload(Skill $skill)
    {
        $data = request()->validate([
            'name' => '',
            'description' => '',
            'lastUsed' => '',
            'lvlSkill_id' => ''
        ]);
        $skill->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'lastUsed' => $data['lastUsed'],
            'lvlSkill_id' => $data['lvlSkill_id'],
        ]);
        return redirect()->route('skill.index', $skill->id_skill);
    }
    public function delete(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skill.index');
    }

}

