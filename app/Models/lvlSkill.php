<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lvlSkill extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'id_lvlSkill';
    public function skills()
    {
        return $this->hasMany(Skill::class,'lvlSkill_id', 'id_lvlSkill');
    }
}
