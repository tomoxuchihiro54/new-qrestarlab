<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('master')->user();

    //dd($users);

    return view('master.home');
})->name('home');

