<x-app-layout>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('grade and section administration panel') }}
        </h2>
        <h2 class="w-full text-xl font-semibold uppercase sm:w-full md:w-3/4">
            {{ $sede->name }}
        </h2>
    </x-slot>

    <div class="w-11/12 mx-auto mt-5">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white text-md">
                        {{ __('list of grades and sections available') }}
                    </h4>
                    <a href="#" class="text-white no-underline cursor-pointer text-md"
                        title="{{ __('school period') }}">
                        {{ __('school period') }} : {{ $periodo->lapso }} </a>
                </div>
            </div>
            <div class="card-body">
                @livewire('add_secion_to_grado_sede', compact('grados', 'sede', 'periodo'))
            </div>
        </div>
    </div>
</x-app-layout>
