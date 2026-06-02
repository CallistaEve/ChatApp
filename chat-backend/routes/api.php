<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::post('/send-message', [MessageController::class, 'send']);

Route::get('/messages/{user1}/{user2}', [MessageController::class, 'getMessages']);