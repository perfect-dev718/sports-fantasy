<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\LeagueInformation;
use App\Models\LeagueSetting;
use App\Models\Player;
use App\Models\Roster;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use View;
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
    public function league_settings(Request $request, $id) {
        return view('dashboard.league.settings', compact('id'));
    }

    /**
     * League Scoreboard page
     */
    public function league_scoreboard(Request $request, $id) {
        return view('dashboard.game.scoreboard');
    }

    /**
     * League Manager
     */
    public function league_manager(Request $request, $id) {
        return view('dashboard.league.manager');
    }

    /**
     * League Information page
     */
    public function league_info(Request $request, $id) {
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
    public function draft_format(Request $request, $id) {
        $league_setting = LeagueSetting::where('league_id', $id)->first();
        return view('dashboard.game.draft_format', compact('id', 'league_setting'));
    }

    /**
     * Save Draft format
     */
    public function draft_format_save(Request $request) {
        $params = $request->all();
        unset($params['_token']);
        $league_setting = new LeagueSetting();
        if(isset($params['id'])) {
            $league_setting = LeagueSetting::find($params['id']);
        }
        foreach ($params as $key=>$param) {
            $league_setting->$key = $param;
        }
        $league_setting->save();
        return redirect()->back()->with('success', 'Successfully Saved');
    }

    /**
     * @description: get each league info
     */
    public function getLeagueInfoAjax(Request $request) {
        $id = $request->get('id');
        $league = League::find($id);
        $info_html = View::make('partials.league.info', compact('league'))->render();
        $score_html = View::make('partials.league.score', compact('league'))->render();
        $match_html = View::make('partials.league.matchup', compact('league'))->render();
        return ['success'=>true, 'info'=>$info_html, 'score'=>$score_html, 'matchup'=>$match_html];
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
        /**************** ToDo ***********/
        // $players = Player::where('status', 'free')->orderBy('full_name', 'asc')->get();
        $players = Player::where('status', 'free')->orderBy('full_name', 'asc')->take(20)->get();
        $teams = Team::where('ownerId', Auth::user()->id)->orderBy('name', 'asc')->get();
        $player = Player::find($id);
        return view('dashboard.game.players_info', compact('player', 'players', 'teams'));
    }

    // get player personal info by ajax.
    public function getPlayerAjax(Request $request) {
        $id = $request->get('id');
        $player = Player::find($id);
        $html = View::make('partials.game.player_profile', compact('player'))->render();
        return ['success'=>true, 'html'=>$html, 'player_id'=>$id];
    }

    /**
     * @description: add player to specific team by ajax
     * @method: POST
     * @params: $request['player_id','teamId']
     */
    public function addPlayerTeamAjax(Request $request) {
        $player_id = $request->get('player_id');
        $teamId = $request->get('teamId');

        /** TODO : Player should be unique in each season */
        $roster = new Roster();
        $roster->playerId = $player_id;
        $roster->teamId = $teamId;
        $roster->save();

        // player should be active
        $player = Player::find($player_id);
        $player->status = "play";
        $player->save();
        return ['success'=>true, 'msg'=>'Successfully added'];
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
    public function team_play_off(Request $request, $id) {
        $teams = Team::all();
        $league_setting = LeagueSetting::where('league_id', $id)->first();
        $playoff_date = $league_setting->playoff_date;
        $playoff_teams = [];
        if(!is_null($league_setting)) {
             $playoff_teams = json_decode($league_setting->playoff_teams);
        }
        return view('dashboard.league.team_play_off', compact('teams', 'id', 'playoff_teams', 'playoff_date'));
    }

    // save playoff
    public function team_play_off_save_ajax(Request $request) {
        $teams = $request->get('teams');
        $teamAry = [];
        foreach ($teams as $team) {
            if($team['val']=="true") {
                $teamAry[] = $team['id'];
            }
        }
        $leagueId = $request->get('leagueId');
        $league_setting = LeagueSetting::where('league_id', $leagueId)->first();
        if(!is_null($league_setting)) {
            $league_setting->playoff_teams = $teamAry;
            $league_setting->playoff_date = $request->get('playoff_date');
            $league_setting->save();
        }
        return ['success'=>true, "msg"=>"Successfully Saved"];
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
