<?php

use App\Http\Controllers\CalculateController;
use Brick\Math\Internal\Calculator;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'index');
})->name(name: 'home');
Route::get('calculate', [CalculateController::class, 'calculate'])
    ->name(name: 'calculate');

