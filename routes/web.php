<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TaskController::class, 'notDoneList']);
Route::post('done/{id}', [TaskController::class, 'done']);
Route::get('add-task', [TaskController::class, 'addForm']);
Route::post('add-task', [TaskController::class, 'addTask']);
Route::get('done-list', [TaskController::class, 'doneList']);
Route::get('edit-task/{id}', [TaskController::class, 'editForm']);
Route::post('edit-task/{id}', [TaskController::class, 'editTask']);
Route::get('delete/{id}', [TaskController::class, 'delete']);
Route::get('clear-done-list', [TaskController::class, 'clearDoneList']);
