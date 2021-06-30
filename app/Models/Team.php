<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function league() {
        return $this->hasOne(League::class, 'id', 'leagueId');
    }

    public function division() {
        return $this->hasOne(Division::class, 'id', 'divisionId');
    }

    public function owner() {
        return $this->belongsTo(User::class,'ownerId', 'id');
    }
}
