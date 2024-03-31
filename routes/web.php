<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('participant')->middleware(['web','auth:participant'])->as('participant.')->group(function() {
    Route::view('/', 'participant.home')->name('index');
    Route::resource('detailTeam', App\Http\Controllers\DetailTeamController::class);
    Route::resource('detailProject', App\Http\Controllers\DetailProjectController::class);
    Route::resource('detailPayment', App\Http\Controllers\DetailPaymentController::class);
    Route::post('/logout', 'App\Http\Controllers\Auth\AuthenticatedSessionController@destroyParticipant')->name('logout');
});
Route::prefix('user')->as('user.')->middleware(['web'])->group(function() {
    Route::view('/', 'participant.home')->name('index');
    Route::resource('openTalks', App\Http\Controllers\OpenTalkController::class);
});
Route::prefix('admin')->as('admin.')->middleware(['auth:admin'])->group(function() {
    Route::view('/', 'admin.home')->name('index');
    Route::resource('participantData', App\Http\Controllers\ParticipantDataController::class);
    Route::resource('openTalkParticipant', App\Http\Controllers\OpenTalkController::class);
    Route::resource('masterPoint', App\Http\Controllers\MasterPointController::class);
    Route::resource('masterReward', App\Http\Controllers\MasterRewardController::class);
    Route::resource('reward', App\Http\Controllers\RewardController::class);
    Route::resource('vote', App\Http\Controllers\VotingController::class);
    Route::resource('point', App\Http\Controllers\PointController::class);
    Route::resource('admin', App\Http\Controllers\AdminController::class);
    Route::post('/approveProject', 'App\Http\Controllers\ParticipantDataController@approveProject')->name('approveProject');

    Route::post('/logout', 'App\Http\Controllers\Auth\AuthenticatedSessionController@destroyAdmin')->name('logout');
});
Route::get('/login/admin', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm');
Route::get('/login/participant', 'App\Http\Controllers\Auth\LoginController@showParticipantLoginForm');
Route::get('/register/admin', 'App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/participant', 'App\Http\Controllers\Auth\RegisterController@showParticipantRegisterForm');

Route::post('/login/admin', 'App\Http\Controllers\Auth\LoginController@adminLogin');
Route::post('/login/participant', 'App\Http\Controllers\Auth\LoginController@participantLogin')->name('login.participant');
Route::post('/register/participant', 'App\Http\Controllers\Auth\RegisterController@createparticipant')->name('register.participant');

Route::view('/home', 'home')->middleware('auth')->name('home');


require __DIR__.'/auth.php';

