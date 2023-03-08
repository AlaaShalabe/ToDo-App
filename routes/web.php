<?php

use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TaskController::class, 'index'])->name('tasks');
Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::Post('tasks/store', [TaskController::class, 'store'])->name('tasks.store');
Route::get('tasks/{task}/show', [TaskController::class, 'show'])->name('tasks.show');
Route::get('tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('tasks/{task}/update', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('tasks/{task}/delete', [TaskController::class, 'destory'])->name('tasks.destory');
