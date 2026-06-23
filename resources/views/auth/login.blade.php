<x-layout title="Login">
    <fieldset class="fieldset w-xs bg-base-200 border border-base-300 p-4 rounded-box mx-auto">
        <legend class="fieldset-legend">Login</legend>

        <form method="POST" action="/login">
            @csrf

            <label class="fieldset-label">Your Email</label>
            <input type="email" name="email" class="input" placeholder="Your email" required />
            <x-forms.error name="email" />

            <label class="fieldset-label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" required />
            <x-forms.error name="password" />

            <button type="submit" class="btn btn-primary mt-4">Login</button>
        </form>
    </fieldset>
</x-layout>