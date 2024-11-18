<x-dialog-modal wire:model="openLesson" maxWidth='4xl'>
    <x-slot name="title">
        <h1 class="text-sm uppercase">{{ __('add lesson to course') }} {{ $course->name }}</h1>
    </x-slot>
    <x-slot name="content">
        <form wire:submit="saveLesson">
            @csrf
            <div class="grid grid-cols-1 gap-1 px-10 mb-2 rounded bg-slate-50">
                <div class="">
                    <div class="mb-2">
                        <x-label class="my-2 italic text-left capitalize" value="{{ __('lesson of section') }}"
                            for="lesson" />
                        <x-input id="lesson" type="text" class="w-full my-2"
                            placeholder="{{ __('input lesson of section') }}" wire:model="lesson" />
                        <x-input-error for="lesson" class="text-left" />
                    </div>
                </div>
                <div class="">
                    <div class="mb-2">
                        <x-label class="my-2 italic text-left capitalize" value="{{ __('description of lesson') }}"
                            for="description" />
                        <textarea rows="6" id="description" type="text" class="w-full rounded"
                            placeholder="{{ __('input description of lesson') }}" wire:model="description"></textarea>
                        <x-input-error for="description" class="text-left" />
                    </div>
                </div>
            </div>
            <button type="submit"
                class="px-3 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                {{ __('create') }}
            </button>
            <button type="button" wire:click="$set('openLesson',false)"
                class="px-3 py-2.5 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:ring-red-800">
                {{ __('cancel') }}
            </button>

        </form>
    </x-slot>
    <x-slot name="footer">

    </x-slot>
</x-dialog-modal>