<x-app-layout>

    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold uppercase sm:w-full md:w-3/4">{{ __('lesson adminitration panel') }}
        </h2>
    </x-slot>

    <div class="w-full p-4 mt-10">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of requeriments') }}
                    </h4>
                    <h4 class="text-white">
                        {{ $course->name }}
                    </h4>
                    <h4 class="text-white">
                        {{ $course->grado }}
                    </h4>
                </div>
                <h4 class="flex items-center justify-between text-white">
                    <p>
                        {{ $section->name }}
                    </p>
                    <p>
                        {{ $lesson->name }}
                    </p>
                </h4>
            </div>
            <div class="card-body">
                <div
                    class="grid justify-between grid-cols-1 gap-3 px-10 py-2 mx-auto md:grid-cols-4 max-h-svh max-w-7xl">
                    @livewire('add-pdf-to-lesson', compact('lesson'))
                    @livewire('add-image-to-lesson', compact('lesson'))
                    <div class="col-span-1 md:col-span-2">
                        @livewire('add-video-to-lesson', compact('lesson'))
                    </div>
                </div>
            </div>

        </div>
</x-app-layout>
