<x-layout title="Idea">
    <div>
        <p>{{ $idea->description }}</p>
        <a href="/ideas/{{ $idea->id }}/edit">Edit</a>
    </div>
</x-layout>