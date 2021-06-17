<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct(Request $request) {
        $this->middleware(['auth', 'Admin']);
    }

    public function index(Request $request) {
        return redirect()->route('user.admin');
    }

    /**
     * @description get all teams and players
     * @method: post ajax
     * @param Request $request
     */
    public function getTeamsPlayers(Request $request) {
        $allTeams = Team::select('id', 'name')->get();
        $allPlayers = Player::select('id','full_name')->get();
        $teams = array();
        foreach ($allTeams as $team) {
            $teams[$team->id] = $team;
        }
        foreach ($allPlayers as $player) {
            $players[$player->id] = $player;
        }
        $success = true;
        return compact('teams', 'players', 'success');
    }
}
