<x-layout title="Create Idea">
    <form method="POST" action="/ideas">
        @csrf
        <div>
            <label for="description">New Idea</label>
            <textarea name="description" id="description"
                class="textarea w-full @error('description') textarea-error @enderror">
            </textarea>

            <x-forms.error name="description" />

            <p>Have an idea you want to save for later?</p>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Save</button>
    </form>
</x-layout>