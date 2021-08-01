<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TeamsPlayersController;
use App\Http\Controllers\ProjectsAuthorsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// //PROJECTS
// Route::apiResource('projects', ProjectsController::class);
// /* Estas lineas de codigo hacen lo mismo que las lineas de abajo */
// // Route::prefix('project/{project}')->group(function () {
// //     Route::patch('state',[ProjectsController::class,'updateState']);
// // });

// // Route::prefix('project/{project}')->group(function () {
// //     Route::patch('{}/state',[ProjectsController::class,'updateState']);
// // });

// Route::prefix('project')->group(function () {
//     Route::prefix('{project}')->group(function () {
//         Route::patch('state', [ProjectsController::class, 'updateState']);
//     });
//     Route::prefix('')->group(function () {
//         Route::patch('state', [ProjectsController::class, 'updateState']);
//     });
// });
// //PROJECTS-AUTHORS
// Route::apiResource('projects.authors', ProjectsAuthorsController::class);

// Route::prefix('project/{project}/authors')->group(function () {
//     Route::prefix('{author}')->group(function () {
//         Route::patch('state', [ProjectsAuthorsController::class, 'updateState']);
//     });
//     Route::prefix('')->group(function () {
//         Route::patch('state', [ProjectsAuthorsController::class, 'updateState']);
//     });
// });

// //TEAMS-PLAYERS
// Route::apiResource('teams/{team}/players', TeamsPlayersController::class);
// // Route::apiResource('teams.players', TeamsPlayersController::class);

// Route::prefix('teams/{team}/player')->group(function () {
//     Route::prefix('{player}')->group(function () {
//         Route::patch('state', [TeamsPlayersController::class, 'updateState']);
//     });
//     Route::prefix('')->group(function () {
//         Route::patch('state', [TeamsPlayersController::class, 'updateState']);
//     });
// });
