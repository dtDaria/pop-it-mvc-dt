<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/sgroup', [Controller\Site::class, 'sgroup']);
Route::add(['GET', 'POST'], '/nstud', [Controller\Site::class, 'nstud']);
Route::add(['GET', 'POST'], '/sdis', [Controller\Site::class, 'sdis']);
Route::add(['GET', 'POST'], '/strStud', [Controller\Site::class, 'strStud']);
Route::add(['GET', 'POST'], '/log', [Controller\Site::class, 'log']);
Route::add(['GET', 'POST'], '/izm', [Controller\Site::class, 'izm']);
