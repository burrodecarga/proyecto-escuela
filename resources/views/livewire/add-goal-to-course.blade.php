<div class="w-full col-span-1 p-2 border rounded border-1 bg-slate-200">
    <div x-data="{ open: false }">
        <a x-show="!open" x-on:click="open=true" class="flex items-center my-3 no-underline cursor-pointer">
            <i class="mx-3 mr-3 text-2xl text-blue-500 fa-regular fa-plus-square" title="{{ __('add goal') }}"></i>
            {{ __('add goal') }}
        </a>
        <article class="card" x-show="open">
            <div class="bg-gray-100 card-body">
                <h1 class="text-xl font-bold">{{ __('add new goal') }}</h1>
                <form wire:submit="addGoal">
                    @csrf
                    <div class="">
                        <div class="col-span-1">
                            <div class="mb-4">
                                <x-label class="my-2 italic text-left capitalize" value="{{ __('goal of course') }}"
                                    for="goal" />
                                <x-input id="goal" type="text" name="goal" class="w-full"
                                    placeholder="{{ __('input goal of course') }}" wire:model="goal" />
                                <x-input-error for="goal" class="text-left" />
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-2">
                        <button type="submit"
                            class="px-3 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                            {{ __('add') }}
                        </button>
                        <button type="button" x-on:click="open=false"
                            class="px-3 py-2.5 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:ring-red-800">
                            {{ __('cancel') }}
                        </button>
                    </div>
                </form>
            </div>
        </article>
    </div>


    <article class="card">
        <div class="font-bold uppercase bg-white card-header">total {{ __('goals') }} :
            {{ $goals->count() }}</div>

        <ul class="p-5 m-0 list-decimal bg-slate-100 ">

            @foreach ($goals as $item)
                <article class="mb-6 bg-white rounded-md card">
                    <div class="bg-white card-body">
                        <header class="flex items-center justify-between pl-3">
                            <li class="p-2 mt-1 text-left bg-white rounded-md grow">
                                <strong>{{ __('goal') }}</strong>
                                :
                                {{ $item->name }}
                            </li>
                            <div class="gap-4 ml-2">

                                <i class="text-blue-500 cursor-pointer fa fa-edit" title="{{ __('edit goal') }}"
                                    wire:click="edit({{ $item }})"></i>
                                <i class="text-red-500 cursor-pointer fa fa-eraser" title="{{ __('delete goal') }}"
                                    wire:click="confirm({{ $item }})"></i>
                            </div>
                        </header>
                    </div>
                </article>
            @endforeach
        </ul>
    </article>
    @include('components.modales.editGoalModal')
    @include('components.modales.confirmGoalModal')

    @push('script')
        <script>
            $(document).ready(function() {

                        $(function() {
                            $(document).tooltip();
                        });
        </script>
    @endpush
</div>
