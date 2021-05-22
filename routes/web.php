<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('/clear', function (){
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return '<H1>Cache Cleared</H1><br><a href="/">back home</a>';
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/forgotten', [LandingController::class, 'forgot'])->name('forgotten');
Route::get('/password-reset', [LandingController::class, 'reset_password'])->name('password-reset');

Route::get('league', [DashboardController::class, 'create_league'])->name('league.create');
Route::get('league/name', [DashboardController::class, 'set_league_name'])->name('league.name');
Route::get('league/join', [DashboardController::class, 'join_league'])->name('league.join');
Route::get('league/choose', [DashboardController::class, 'choose_league'])->name('league.choose');
Route::get('league/settings', [DashboardController::class, 'league_settings'])->name('league.settings');
Route::get('league/scoreboard', [DashboardController::class, 'league_scoreboard'])->name('league.scoreboard');
Route::get('league/manager', [DashboardController::class, 'league_manager'])->name('league.manager');
Route::get('league/information', [DashboardController::class, 'league_info'])->name('league.info');


Route::get('league/number', [DashboardController::class, 'set_league_number'])->name('loague.number');
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
Route::prefix('admin')->group(function(){
   Route::get('/', [AdminController::class, 'index'])->name('admin');
   Route::get('/users', [UserController::class, 'index'])->name('user.admin');
   Route::get('/users/edit', [UserController::class, 'edit'])->name('user.edit');
   Route::post('/users/delete', [UserController::class, 'delete'])->name('user.delete');
   Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
   Route::post('/users/update', [UserController::class, 'update'])->name('user.update');
});
