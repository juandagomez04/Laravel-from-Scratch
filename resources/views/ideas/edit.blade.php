<x-layout title="Edit Idea">
    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')
        <div>
            <label for="description">Edit your idea</label>
            <textarea name="description" id="description" class="textarea w-full">
                {{ $idea->description }}
            </textarea>
            <x-forms.error name="description" />
        </div>
        <button type="submit" class="btn btn-primary mt-4">Update</button>
    </form>

    <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('DELETE')
    </form>
    <button type="submit" form="delete-idea-form" class="btn btn-warning mt-4">Delete</button>
</x-layout>