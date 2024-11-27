<x-app-layout>
    <x-slot name="header">
        <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('panel for assigning students to grado') }}</h2>
        <h3>{{ $grado->name }} {{ __('section') }} {{ $grado_sede->letra }} </h3>
    </x-slot>

    @livewire('add-students-to-grado', compact('users', 'grado', 'grado_sede'))


</x-app-layout>
