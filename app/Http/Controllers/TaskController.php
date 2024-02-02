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

class TaskController extends Controller
{

    public function index()
    {
        $id = session('id');
        $tasks = Task::where('character_id', $id)->get();
        return view('task.index', compact('tasks'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function show(Task $task)
    {
        return view('task.show', compact('task'));
    }
    public function store(){
        echo 'hello';
        $data = request()->validate([
            'name' => '',
            'description' => '',
        ]);
        Task::create([
            'name' => $data['name'],
                'description' => $data['description'],
                'character_id' => session('id')
            ]);
        return redirect()->route('task.index');
    }
    public function edit(Task $task)
    {
        return view('task.edit', compact('task'));
    }
    public function upload(Task $task)
    {
        $data = request()->validate([
            'name' => '',
            'description' => '',
        ]);
        $task->update([
            'name' => $data['name'],
            'description' => $data['description'],
        ]);
        return redirect()->route('task.index', $task->id_task);
    }
    public function delete(Task $task)
    {
        $task->delete();
        $character = Character::find(session('id'));
        $i = $character->experience+10;
        $character->update([
            'experience' =>  $i,
        ]);
        return redirect()->route('task.index');
    }

}

