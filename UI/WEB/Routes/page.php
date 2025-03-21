<?php

use App\Containers\Page\UI\WEB\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/test', [PageController::class, 'index']);
Route::get('/{slug}', [PageController::class, 'show']);