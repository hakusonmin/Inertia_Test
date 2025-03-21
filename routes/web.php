<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('User/Novel/Index');
})->name('home');

require __DIR__.'/settings.php';

require __DIR__.'/auth.php';

require __DIR__.'/user.php';

require __DIR__.'/admin.php';
