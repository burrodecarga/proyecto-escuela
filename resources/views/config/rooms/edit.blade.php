<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white rounded shadow-lg">
        <div class="w-full p-6 mx-auto my-10">
            <h1 class="text-xl italic font-semibold capitalize">
                {{ __($title) }}
            </h1>
            <hr>
            <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('config.rooms.partials.form_edit')
            </form>
        </div>
    </div>
</x-app-layout>
