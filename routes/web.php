<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/data-tables', function () {
    return view('data-tables');
})->name('data-tables');
