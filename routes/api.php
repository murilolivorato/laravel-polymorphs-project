<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VideoController;

Route::apiResource('comments', CommentController::class);
Route::apiResource('posts', PostController::class);
Route::apiResource('tags', TagController::class);
Route::apiResource('videos', VideoController::class);
