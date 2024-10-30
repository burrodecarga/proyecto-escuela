@csrf
<div class="">
    <div class="mb-1">
        <x-label class="my-2 italic capitalize" value="{{ __('sede') }}" for="sede_id" />
        <select name="sede_id" class="w-full rounded-lg">
            @foreach ($sedes as $sede)
                <option value="{{ $sede->id }}"> {{ __($title) . ' : ' . $sede->name }}</option>
            @endforeach
        </select>
        <x-input-error for="school_id" />
    </div>
    <div class="mb-4">
        <x-label class="my-2 italic capitalize" value="{{ __('name of room') }}" for="name" />
        <x-input type="text" name="name" class="w-full" placeholder="{{ __('input name of room') }}"
            value="{{ old('name', $room->name) }}" />
        <x-input-error for="name" />
    </div>
    <div class="grid grid-cols-3 gap-3">
        <div class="mb-4">
            <x-label class="my-2 italic capitalize" value="{{ __('width of room') }}" for="width" />
            <x-input type="number" min="1" step="any" name="width" class="w-full"
                placeholder="{{ __('input width of room') }}" value="{{ old('width', $room->width) }}" />
            <x-input-error for="width" />
        </div>
        <div class="mb-4">
            <x-label class="my-2 italic capitalize" value="{{ __('long of room') }}" for="long" />
            <x-input type="number" min="1" step="any" name="long" class="w-full"
                placeholder="{{ __('input long of room') }}" value="{{ old('long', $room->long) }}" />
            <x-input-error for="long" />
        </div>

        <div class="mb-4">
            <x-label class="my-2 italic capitalize" value="{{ __('high of room') }}" for="high" />
            <x-input type="number" min="1" step="any" name="high" class="w-full"
                placeholder="{{ __('input high of room') }}" value="{{ old('high', $room->high) }}" />
            <x-input-error for="high" />
        </div>

    </div>
</div>

<div class="flex justify-around">
    <button type="submit"
        class="bg-blue-700 text-white hover:bg-green-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        {{ __($btn) }}

    </button>

    <a type="button" href="{{ route('rooms.index') }}"
        class="bg-yellow-500 text-white hover:bg-red-600 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center no-underline">
        {{ __('cancel') }}
    </a>
</div>
