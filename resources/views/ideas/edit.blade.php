<x-layout title="Edit Idea">
    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')
        <div>
            <label for="description">Edit your idea</label>
            <textarea name="description" id="description">{{ $idea->description }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>

    <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('DELETE')
    </form>
    <button type="submit" form="delete-idea-form">Delete</button>
</x-layout>