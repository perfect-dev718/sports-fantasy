<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function team() {
        return $this->hasOne(Team::class, 'id', 'teamId');
    }

    public function sport() {
        return $this->hasOne(Sport::class, 'id', 'sportId');
    }
}
