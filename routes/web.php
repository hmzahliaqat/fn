<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $active = config('zephyr.active');
    $view = 'zephyrs.' . $active;

    if (!view()->exists($view)) {
        abort(404, 'Zephyr not found: ' . $active);
    }

    return view($view);
});
