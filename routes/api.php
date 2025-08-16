<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/get-all-tasks', [TaskController::class, 'getAllTasks']);
Route::get('/get-task-byId/{taskid}', [TaskController::class, 'getOneTask']);
Route::post('/create-task',[TaskController::class, 'createTask']);
Route::patch('/update-task/{taskid}', [TaskController::class, 'updateTask']);
Route::patch('/update-task-done/{taskid}', [TaskController::class, 'updateTaskIsDone']);
Route::delete('/delete-task/{taskid}', [TaskController::class, 'deleteTask']);