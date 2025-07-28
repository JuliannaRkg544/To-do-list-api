<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/get-all-tasks', [TaskController::class, 'getAllTasks']);