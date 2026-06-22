<x-layout title="Create Idea">
    <form method="POST" action="/ideas">
        @csrf
        <div>
            <label for="idea">Create New Idea</label>
            <textarea name="idea" id="idea"></textarea>
            <p>Have an idea you want to save for later?</p>
        </div>
        <button type="submit">Save</button>
    </form>
</x-layout>