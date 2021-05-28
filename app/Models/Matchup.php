<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchup extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function league() {
        return $this->hasOne(League::class, 'id', 'leagueId');
    }

    public function winning() {
        return $this->hasOne(Team::class, 'id', 'winningTeamId');
    }

    public function losing() {
        return $this->hasOne(Team::class, 'id', 'losingTeamId');
    }
}
