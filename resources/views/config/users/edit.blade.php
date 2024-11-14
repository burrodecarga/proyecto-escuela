<x-app-layout>
    <div class="max-w-5xl mx-auto bg-white rounded shadow-lg">
        <div class="w-full p-6 mx-auto my-10">
            <h1 class="text-2xl font-bold uppercase"><strong>{{ $title }}</strong></h1>
            <hr>
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @method('PUT')
                <input type="hidden" name="id" value="{{ $user->id }}">
                @include('config.users.partials.form')
            </form>
        </div>
    </div>
</x-app-layout>
