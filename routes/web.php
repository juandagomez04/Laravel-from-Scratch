<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;


Route::get('/', function () {
    $ideas = Idea::all();
    return view('ideas', ['ideas' => $ideas]);
});

Route::get('/ideas/{id}/delete', function ($id) {
    Idea::destroy($id);
    return redirect('/');
});

Route::post('/ideas', function () {
    Idea::create([
        'description' => request('idea'),
        'state' => 'pending'
    ]);
    return redirect('/');
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');