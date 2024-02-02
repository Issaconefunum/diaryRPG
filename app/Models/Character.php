<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'characters';
    protected  $primaryKey = 'id_character';
    public function buffs()
    {
        return $this->hasMany(Buff::class,'character_id', 'id_character');
    }
    public function authorization()
    {
        return $this->belongsTo(Authorization::class, 'login_id', 'id');
    }
    public function notes()
    {
        return $this->hasMany(Note::class,'character_id', 'id_character');
    }
    public function tasks()
    {
        return $this->hasMany(Task::class,'character_id', 'id_character');
    }
    public function race()
    {
        return $this->belongsTo(Race::class,'race_id', 'id_race');
    }
    public function skills()
    {
        return $this->hasMany(Skill::class,'character_id', 'id_character');
    }
}
