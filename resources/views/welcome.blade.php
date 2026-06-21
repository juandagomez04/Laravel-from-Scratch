<x-layout title="Home">
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach

        @if (count($tasks) === 0)
            <li>No tasks found.</li>
        @endif
    </ul>
</x-layout>