<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use App\Http\Requests\StoreIdeaRequest;
use app\Http\Requests\IdeaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class IdeaController extends Controller
{
    public function index()
    {
        $ideas = Auth::check() ? Auth::user()->ideas : collect();
        return view('ideas.index', ['ideas' => $ideas]);
    }

    public function create()
    {
        return view('ideas.create');
    }

    public function store(StoreIdeaRequest $request)
    {
        Auth::user()->ideas()->create([
            'description' => $request->input('description'),
            'state' => 'pending',
        ]);

        return redirect('/ideas');
    }

    public function show(Idea $idea)
    {
        Gate::authorize('update', $idea);
        return view('ideas.show', ['idea' => $idea]);
    }

    public function edit(Idea $idea)
    {
        return view('ideas.edit', ['idea' => $idea]);
    }

    public function update(IdeaRequest $request, Idea $idea)
    {
        $idea->update([
            'description' => $request->input('description')
        ]);
        return redirect('/ideas/' . $idea->id);
    }

    public function destroy(Idea $idea)
    {
        $idea->delete();
        return redirect('/ideas');
    }
}