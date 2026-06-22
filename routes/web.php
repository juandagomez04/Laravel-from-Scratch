<?php

use Illuminate\Support\Facades\Route;
use App\Models\Idea;

// Index - mostrar todas las ideas
Route::get('/ideas', function () {
    $ideas = Idea::all();
    return view('ideas.index', ['ideas' => $ideas]);
});

// Store - guardar nueva idea
Route::post('/ideas', function () {
    Idea::create([
        'description' => request('idea'),
        'state' => 'pending'
    ]);
    return redirect('/ideas');
});

// Show - mostrar una idea
Route::get('/ideas/{idea}', function (Idea $idea) {
    return view('ideas.show', ['idea' => $idea]);
});

// Edit - formulario para editar
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', ['idea' => $idea]);
});

// Update - actualizar idea
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description')
    ]);
    return redirect('/ideas/' . $idea->id);
});

// Destroy - eliminar idea
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();
    return redirect('/ideas');
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');