<x-layout title="Ideas">
    <div class="grid grid-cols-2 gap-6 gap-y-4">
        @forelse($ideas as $idea)
            <a href="/ideas/{{ $idea->id }}">
                <div class="card bg-neutral">
                    <x-idea-card href="/ideas/{{ $idea->id }}">
                        {{ $idea->description }}
                    </x-idea-card>
                </div>
            </a>
        @empty
            <p>No ideas yet. <a href="/ideas/create">Create one?</a></p>
        @endforelse
    </div>
</x-layout>