<x-app-layout>
    <div class="w-1/2 mx-auto bg-white rounded shadow-lg">
        <div class="w-full p-6 mx-auto my-10">
            <h1 class="text-xl italic font-semibold capitalize">
                {{ __($title) }}
            </h1>
            <hr>
            <form action="{{ route('resources.update', $resource->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                <input type="hidden" name="resource_id" value="{{ $resource->id }}" />
                @include('config.resources.partials.form_resource')
            </form>
        </div>
    </div>
</x-app-layout>
