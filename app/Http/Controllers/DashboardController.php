<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Create League page
     */
    public function create_league() {
        return view('dashboard.league.create');
    }

    /**
     * set League name
     */
    public function set_league_name() {
        $teams = Team::orderBy('name', 'asc')->get();
        return view('dashboard.league.name', compact('teams'));
    }

    /**
     * Save League name
     */
    public function save_league_name(Request $request) {
        $request->validate([
            'name'=>"required|unique:leagues"
        ]);
        $params = $request->all();
        $params['userId'] = Auth::user()->id;
        $league = League::create($params);
        return redirect()->route('league.number', ['id'=>$league->id]);
    }

    /**
     *  join league
     */
    public function join_league() {
        return view('dashboard.league.join');
    }

    /**
     * Choose a public league to join
     */
    public function choose_league() {
        return view('dashboard.league.choose');
    }

    /**
     * League Setting page
     */
    public function league_settings() {
        return view('dashboard.league.settings');
    }

    /**
     * League Scoreboard page
     */
    public function league_scoreboard() {
        return view('dashboard.game.scoreboard');
    }

    /**
     * League Manager
     */
    public function league_manager() {
        return view('dashboard.league.manager');
    }

    /**
     * League Information page
     */
    public function league_info() {
        return view('dashboard.league.information');
    }

    /**
     * choose League number
     */
    public function set_league_number(Request $request) {
        $teams = Team::all();
        $id = $request->get('id');
        return view('dashboard.league.number', compact('teams', 'id'));
    }

    /**
     * save team id of league
     */
    public function save_league_number(Request $request) {
        $request->validate([
            'id'=>"required|exists:leagues"
        ]);
        $teamId = $request->get('teamId');
        $leagueId = $request->get('id');
        $league = League::find($leagueId);
        $league->teamId = $teamId;
        $league->save();
        return redirect()->route('invite.public');
    }

    /**
     * enter game center
     */
    public function invite_public() {
        return view('dashboard.game.invite_public');
    }

    /**
     * Invite friend
     */
    public function invite_friend() {
        return view('dashboard.game.invite_friend');
    }

    /**
     * Game Profile page
     */
    public function game_profile() {
        return view('dashboard.game.profile');
    }

    /**
     * Draft page
     */
    public function draft() {
        return view('dashboard.game.draft');
    }

    /**
     * Draft Order page
     */
    public function draft_order() {
        return view('dashboard.game.draft_order');
    }

    /**
     * Draft format page
     */
    public function draft_format() {
        return view('dashboard.game.draft_format');
    }

    /**
     * Profile page
     */
    public function profile() {
        return view('dashboard.sidebar.profile');
    }

    /**
     * Game center page
     */
    public function game_center() {
        return view('dashboard.game.center');
    }

    /**
     * My League page
     */
    public function my_league() {
        $leagues = League::where('userId', Auth::user()->id)->get();
        if(count($leagues) > 0) {
            return view('dashboard.game.my_league', compact('leagues'));
        }else{
            return redirect()->route('league.create.user');
        }
    }

    public function my_teams() {
        $teams = Team::where('ownerId', Auth::user()->id)->orderBy('name', 'asc')->get();
        return view('dashboard.game.my_teams', compact('teams'));
    }

    public function team_create() {
        return view('dashboard.team.name');
    }

    public function team_save(Request $request) {
        $request->validate([
            'name'=>"required|unique:teams"
        ]);
        $newTeam = new Team();
        $newTeam->name = $request->get('name');
        $newTeam->ownerId = Auth::user()->id;
        $newTeam->save();
        return redirect()->back()->with('success', 'Created Successfully');
    }

    public function players_free_agency() {
        $players = Player::where('status', 'free')->orderBy('full_name', 'asc')->get();
        return view('dashboard.game.players_free_agency', compact('players'));
    }

    public function players_info(Request $request, $id) {
        $players = Player::where('status', 'free')->orderBy('full_name', 'asc')->get();
        $player = Player::find($id);
        return view('dashboard.game.players_info', compact('player', 'players'));
    }

    public function player_add() {
        return view('dashboard.game.player_add');
    }

    public function confirm_team() {
        return view('dashboard.game.team_confirm');
    }

    // team page
    public function team_show() {
        return view('dashboard.game.team_show');
    }

    // Play off team
    public function team_play_off() {
        return view('dashboard.game.team_play_off');
    }

    // Trade offer page
    public function trade_offer() {
        return view('dashboard.game.trade_offer');
    }

    public function condition_drop() {
        return view('dashboard.game.condition_drop');
    }

    public function trade_recap() {
        return view('dashboard.game.trade_recap');
    }

    public function league_schedule() {
        return view('dashboard.game.league_schedule');
    }

    public function standings() {
        return view('dashboard.game.standings');
    }

    public function offer_trade() {
        return view('dashboard.game.offer_trade');
    }
}
