<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected  $primaryKey = 'id_race';
    public function characters()
    {
        return $this->hasMany(Character::class, 'id_race', 'race_id');
    }
}
