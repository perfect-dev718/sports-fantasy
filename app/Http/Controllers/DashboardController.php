<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct() {

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
        return view('dashboard.league.name');
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
     * choose League number
     */
    public function set_league_number() {
        return view('dashboard.league.number');
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
        return view('dashboard.game.my_league');
    }

    public function my_teams() {
        return view('dashboard.game.my_teams');
    }
}
