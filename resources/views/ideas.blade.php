<x-layout title="Ideas">
    <style>
        form {
            max-width: 600px;
            margin: 1.5rem auto;
            padding: 1rem;
            border: 1px solid #d1d5db;
            border-radius: 0.75rem;
            background: #f9fafb;
        }

        form div {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        label {
            font-weight: 600;
        }

        textarea {
            min-height: 120px;
            padding: 0.75rem;
            border: 1px solid #cbd5e1;
            border-radius: 0.5rem;
            font-family: inherit;
            resize: vertical;
        }

        button {
            margin-top: 1rem;
            padding: 0.75rem 1.25rem;
            border: none;
            border-radius: 0.5rem;
            background: #2563eb;
            color: white;
            cursor: pointer;
            font-weight: 600;
        }

        button:hover {
            background: #1d4ed8;
        }

        h2 {
            margin-top: 2rem;
            font-size: 1.25rem;
        }

        ul {
            list-style: disc;
            padding-left: 1.5rem;
            margin-top: 0.75rem;
        }

        li {
            margin-bottom: 0.5rem;
            padding: 0.5rem;
            border-bottom: 1px solid #e2e8f0;
        }
    </style>

    <form method="POST" action="/ideas">
        @csrf
        <div>
            <label for="idea">New Idea</label>
            <textarea name="idea" id="idea"></textarea>
            <p>Have an idea you want to save for later?</p>
        </div>
        <button type="submit">Save</button>
    </form>

    @if(count($ideas))
        <div>
            <h2>Saved Ideas</h2>
            <ul>
                @forelse($ideas as $idea)
                    <li>
                        {{ $idea->description }}
                        <a href="/ideas/{{ $idea->id }}/delete">Delete</a>
                    </li>
                @empty
                    <li>No ideas yet.</li>
                @endforelse
            </ul>
        </div>
    @endif
</x-layout>