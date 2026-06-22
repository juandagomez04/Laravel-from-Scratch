<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = session()->get('ideas', []);
    return view('ideas', ['ideas' => $ideas]);
});

Route::get('/delete-ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});

Route::post('/ideas', function () {
    $idea = request('idea');
    session()->push('ideas', $idea);
    return redirect('/');
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');