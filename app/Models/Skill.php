<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_skill';

    public function characters()
    {
        return $this->belongsTo(Character::class, 'character_id', 'id_character');
    }
    public function lvlSkills()
    {
        return $this->belongsTo(lvlSkill::class)->withDefault([
        'name' => 'Guest Author']);
    }

}
