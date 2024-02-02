<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buff extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'buffs';
    protected  $primaryKey = 'id_buff';
    public function characters()
    {
        return $this->belongsTo(Character::class, 'character_id', 'id_character');
    }
}
