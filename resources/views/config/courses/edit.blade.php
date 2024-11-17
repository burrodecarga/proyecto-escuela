<x-app-layout>
    <div class="max-w-md mx-auto bg-white rounded shadow-lg">
        <div class="w-full p-6 mx-auto my-10">
            <h1 class="text-2xl font-bold capitalize"><strong>{{ $title }}</strong></h1>
            <hr>
            <form action="{{ route('courses.update', $course->id) }}" method="POST">
                @method('PUT')
                @include('config.courses.partials.form')
            </form>
        </div>
    </div>
</x-app-layout>
