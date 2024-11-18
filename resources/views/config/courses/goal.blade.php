<x-app-layout>

    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold uppercase sm:w-full md:w-3/4">{{ __('goal adminitration panel') }}
        </h2>
    </x-slot>

    <div class="mt-10">
        <div class="w-full mx-auto text-center card md:w-3/4 min-w-12">
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
            </div>
            <div class="card-body">
                @livewire('add_goal_to_course', compact('course'))
            </div>
        </div>

    </div>
</x-app-layout>
