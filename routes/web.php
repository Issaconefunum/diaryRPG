<?php

use App\Http\Controllers\AutorizationController;
use App\Http\Controllers\BuffController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/authorization/create', [AutorizationController::class, 'create'])->name('authorization');
Route::post('/authorization', [AutorizationController::class, 'store'])->name('authorization.store');
Route::post('/authorization/enter/check', [AutorizationController::class, 'check'])->name('authorization.check');
Route::get( '/', [AutorizationController::class, 'enter'])->name('authorization.enter');
Route::get( '/main/profile', [MainController::class, 'profile'])->name('main.profile');


Route::get('/main/task', [TaskController::class, 'index'])->name('task.index');
Route::get('/main/task/create', [TaskController::class, 'create'])->name('task.create');
Route::get('/main/task/{task}', [TaskController::class, 'show'])->name('task.show');
Route::get('/main/task/{task}/edit', [TaskController::class, 'edit'])->name('task.edit');
Route::patch('/main/task/{task}', [TaskController::class, 'upload'])->name('task.upload');
Route::delete('/main/task/{task}', [TaskController::class, 'delete'])->name('task.delete');
Route::post('/main/task', [TaskController::class, 'store'])->name('task.store');

Route::get('/main/buff', [BuffController::class, 'index'])->name('buff.index');
Route::get('/main/buff/create', [BuffController::class, 'create'])->name('buff.create');
Route::get('/main/buff/{buff}', [BuffController::class, 'show'])->name('buff.show');
Route::get('/main/buff/{buff}/edit', [BuffController::class, 'edit'])->name('buff.edit');
Route::patch('/main/buff/{buff}', [BuffController::class, 'upload'])->name('buff.upload');
Route::delete('/main/buff/{buff}', [BuffController::class, 'delete'])->name('buff.delete');
Route::post('/main/buff', [BuffController::class, 'store'])->name('buff.store');

Route::get('/main/skill', [SkillController::class, 'index'])->name('skill.index');
Route::get('/main/skill/create', [SkillController::class, 'create'])->name('skill.create');
Route::get('/main/skill/{skill}', [SkillController::class, 'show'])->name('skill.show');
Route::get('/main/skill/{skill}/edit', [SkillController::class, 'edit'])->name('skill.edit');
Route::patch('/main/skill/{skill}', [SkillController::class, 'upload'])->name('skill.upload');
Route::delete('/main/skill/{skill}', [SkillController::class, 'delete'])->name('skill.delete');
Route::post('/main/skill', [SkillController::class, 'store'])->name('skill.store');
