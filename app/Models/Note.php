<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected  $primaryKey = 'id_note';
    public function characters()
    {
        return $this->belongsTo(Character::class, 'character_id', 'id_character');
    }
}
