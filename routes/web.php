<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\admin\SportController;
use App\Http\Controllers\admin\DivisionController;
use App\Http\Controllers\admin\LeagueController;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\admin\MatchupController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('/');

Auth::routes();

Route::get('/clear', function () {
    Artisan::call('optimize:clear');
//    Artisan::call('view:clear');
    return '<H1>Cache Cleared</H1><br><a href="/">back home</a>';
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/forgotten', [LandingController::class, 'forgot'])->name('forgotten');
Route::get('/password-reset', [LandingController::class, 'reset_password'])->name('password-reset');

Route::get('league', [DashboardController::class, 'create_league'])->name('league.create.user');
Route::get('league/name', [DashboardController::class, 'set_league_name'])->name('league.name');
Route::post('league/name/save', [DashboardController::class, 'save_league_name'])->name('league.name.save');

Route::get('league/join', [DashboardController::class, 'join_league'])->name('league.join');
Route::get('league/choose', [DashboardController::class, 'choose_league'])->name('league.choose');
Route::get('league/settings', [DashboardController::class, 'league_settings'])->name('league.settings');
Route::get('league/scoreboard', [DashboardController::class, 'league_scoreboard'])->name('league.scoreboard');
Route::get('league/manager', [DashboardController::class, 'league_manager'])->name('league.manager');
Route::get('league/information', [DashboardController::class, 'league_info'])->name('league.info');


Route::get('league/number', [DashboardController::class, 'set_league_number'])->name('league.number');
Route::post('league/number/save', [DashboardController::class, 'save_league_number'])->name('league.number.save');

Route::get('invite/public', [DashboardController::class, 'invite_public'])->name('invite.public');
Route::get('invite/friend', [DashboardController::class, 'invite_friend'])->name('invite.friend');
Route::get('game/profile', [DashboardController::class, 'game_profile'])->name('game.profile');
Route::get('draft', [DashboardController::class, 'draft'])->name('draft');
Route::get('draft/order', [DashboardController::class, 'draft_order'])->name('draft.order');
Route::get('draft/format', [DashboardController::class, 'draft_format'])->name('draft.format');

/**
 * Sidebar menus
 */
Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
Route::get('game/center', [DashboardController::class, 'game_center'])->name('game.center');
Route::get('game/my-league', [DashboardController::class, 'my_league'])->name('game.my.league');
Route::get('game/my-teams', [DashboardController::class, 'my_teams'])->name('game.my.teams');

Route::get('game/players-free-agency', [DashboardController::class, 'players_free_agency'])->name('game.players.free.agency');
Route::get('game/player/info', [DashboardController::class, 'players_info'])->name('game.players.info');
Route::get('game/player/add', [DashboardController::class, 'player_add'])->name('game.player.add');
Route::get('game/team/confirm', [DashboardController::class, 'confirm_team'])->name('game.confirm.team');
Route::get('game/team/show', [DashboardController::class, 'team_show'])->name('game.team.show');
Route::get('game/team/play-off', [DashboardController::class, 'team_play_off'])->name('game.team.play.off');

/******************* Trade routes *************************/
Route::get('game/trade/offer', [DashboardController::class, 'trade_offer'])->name('game.trade.offer');
Route::get('game/trade/condition-drop', [DashboardController::class, 'condition_drop'])->name('game.trade.condition.drop');
Route::get('game/trade/recap', [DashboardController::class, 'trade_recap'])->name('game.trade.recap');

Route::get('game/players-league-schedule', [DashboardController::class, 'league_schedule'])->name('game.league.schedule');
Route::get('game/players-standings', [DashboardController::class, 'standings'])->name('game.standings');


/*********************************** Admin Dashboard ***********************/

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/users', [UserController::class, 'index'])->name('user.admin');
    Route::get('/users/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
    Route::post('/users/update', [UserController::class, 'update'])->name('user.update');
    Route::post('/users/delete', [UserController::class, 'delete'])->name('user.delete');

    Route::get('/sports', [SportController::class, 'index'])->name('sport.admin');
    Route::get('/sports/create', [SportController::class, 'create'])->name('sport.create');
    Route::get('/sports/edit', [SportController::class, 'edit'])->name('sport.edit');
    Route::post('/sports/store', [SportController::class, 'store'])->name('sport.store');
    Route::post('/sports/update', [SportController::class, 'update'])->name('sport.update');
    Route::post('/sports/delete', [SportController::class, 'delete'])->name('sport.delete');

    Route::get('/divisions', [DivisionController::class, 'index'])->name('division.admin');
    Route::get('/division/create', [DivisionController::class, 'create'])->name('division.create');
    Route::get('/division/edit', [DivisionController::class, 'edit'])->name('division.edit');
    Route::post('/division/store', [DivisionController::class, 'store'])->name('division.store');
    Route::post('/division/update', [DivisionController::class, 'update'])->name('division.update');
    Route::post('/division/delete', [DivisionController::class, 'delete'])->name('division.delete');

    Route::get('/leagues', [LeagueController::class, 'index'])->name('league.admin');
    Route::get('/league/create', [LeagueController::class, 'create'])->name('league.create');
    Route::get('/league/edit', [LeagueController::class, 'edit'])->name('league.edit');
    Route::post('/league/store', [LeagueController::class, 'store'])->name('league.store');
    Route::post('/league/update', [LeagueController::class, 'update'])->name('league.update');
    Route::post('/league/delete', [LeagueController::class, 'delete'])->name('league.delete');

    Route::get('/teams', [TeamController::class, 'index'])->name('team.admin');
    Route::get('/team/create', [TeamController::class, 'create'])->name('team.create');
    Route::get('/team/edit', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::post('/team/update', [TeamController::class, 'update'])->name('team.update');
    Route::post('/team/delete', [TeamController::class, 'delete'])->name('team.delete');

    Route::get('/matchups', [MatchupController::class, 'index'])->name('matchup.admin');
    Route::get('/matchup/create', [MatchupController::class, 'create'])->name('matchup.create');
    Route::get('/matchup/edit', [MatchupController::class, 'edit'])->name('matchup.edit');
    Route::post('/matchup/store', [MatchupController::class, 'store'])->name('matchup.store');
    Route::post('/matchup/update', [MatchupController::class, 'update'])->name('matchup.update');
    Route::post('/matchup/delete', [MatchupController::class, 'delete'])->name('matchup.delete');

});
