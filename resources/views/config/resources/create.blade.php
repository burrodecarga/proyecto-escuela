<x-app-layout>
    <div class="w-1/2 mx-auto bg-white rounded shadow-lg">
        <div class="w-full p-6 mx-auto my-10">
            <h1 class="text-xl italic font-semibold capitalize">
                {{ __($title) }}
            </h1>
            <hr>
            <form action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                <input type="hidden" name="ubication" value="{{ $ubication }}">
                <input type="hidden" name="resourceable_id" value="{{ $resourceable_id }}">
                <input type="hidden" name="resourceable_type" value="{{ $resourceable_type }}">
                @include('config.resources.partials.form_resource')
            </form>
        </div>
    </div>
</x-app-layout>
