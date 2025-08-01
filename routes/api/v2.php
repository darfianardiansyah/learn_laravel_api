<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V2\TaskController;
use App\Http\Controllers\Api\V2\CompleteTaskController;

Route::apiResource('/tasks', TaskController::class);
Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
