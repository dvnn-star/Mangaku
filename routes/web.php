<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AnimeController::class,'index']);
Route::livewire('/post/create', 'pages::post.create');
