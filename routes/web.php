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
Route::get('projects/{project}', function () {
    return 'project id';
});
Route::get('projects', function () {
    return ['projects1', 'projects2'];
});
Route::delete('projects/{project}', function () {
    return 'Deleted';
});
Route::put('projects/{project}', function () {
    return 'Updated';
});
Route::post('projects', function () {
    return 'Created';
});

//Resources relationships
Route::get('teams/{team}/players/{player}', function () {
    return 'player id';
});
Route::get('teams/{team}/players', function () {
    return ['player1', 'players2'];
});
Route::delete('teams/{team}/players/{player}', function () {
    return 'Deleted';
});
Route::put('teams/{team}/players/{player}', function () {
    return 'Updated';
});
Route::post('teams/{team}/players', function () {
    return 'Created';
});
