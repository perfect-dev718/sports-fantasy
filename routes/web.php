<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
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

Route::get('league/number', [DashboardController::class, 'set_league_number'])->name('loague.number');
Route::get('invite/public', [DashboardController::class, 'invite_public'])->name('invite.public');
Route::get('invite/friend', [DashboardController::class, 'invite_friend'])->name('invite.friend');
Route::get('game/profile', [DashboardController::class, 'game_profile'])->name('game.profile');
Route::get('draft', [DashboardController::class, 'draft'])->name('draft');
Route::get('draft/order', [DashboardController::class, 'draft_order'])->name('draft.order');

/**
 * Sidebar menus
 */
Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
Route::get('game/center', [DashboardController::class, 'game_center'])->name('game.center');
Route::get('game/my-league', [DashboardController::class, 'my_league'])->name('game.my.league');
Route::get('game/my-teams', [DashboardController::class, 'my_teams'])->name('game.my.teams');
