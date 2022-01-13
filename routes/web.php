<?php

use Laravel\Jetstream\Http\Controllers\CurrentTeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\ApiTokenController;
use Laravel\Jetstream\Http\Controllers\Livewire\TeamController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreatedProject;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ContatoControllerLogged;

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

Route::post('contato/send', [ContatoController::class, 'send']);
Route::post('contato-logged/send', [ContatoControllerLogged::class, 'send']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware('verified');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('new-project', function () {
    return view('layouts.new-project');
})->name('new-project');

Route::get('created-project', function () {
    return view('layouts.created-project');
})->name('created-project');

Route::get('my-projects', function () {
    return view('layouts.my-projects');
})->name('my-projects');

Route::get('team', function () {
    return view('layouts.team');
})->name('team');

Route::get('contact', function () {
    return view('layouts.contact');
})->name('contact');

Route::get('about', function () {
    return view('layouts.about');
})->name('about');

Route::get('curadoria', function () {
    return view('layouts.curadoria');
})->name('curadoria');

Route::get('sistema-admin', function () {
    return view('layouts.sistema-admin');
})->name('sistema-admin');

Route::get('user-profile', function () {
    return view('layouts.user-profile');
})->name('user-profile');

Route::get('molecule-search', function () {
    return view('layouts.molecule-search');
})->name('molecule-search');

Route::get('map-search', function () {
    return view('layouts.map-search');
})->name('map-search');

Route::get('user/{id}', function (Request $request) {
    return view('layouts.user-page');
})->name('user-page');

Route::get('mol/{id_molecula}', function (Request $request) {
    return view('layouts.mol-page');
})->name('mol-page');

Route::get('map/{id_molecula}', function (Request $request) {
    return view('layouts.map-page');
})->name('map-page');

Route::get('/avaliar-projeto/{id_projeto}', function (Request $request) {
    return view('layouts.avaliar-projeto');
})->name('avaliar-projeto');

Route::get('/avaliacao/{id_projeto}', function (Request $request) {
    return view('layouts.avaliacao');
})->name('avaliacao');
