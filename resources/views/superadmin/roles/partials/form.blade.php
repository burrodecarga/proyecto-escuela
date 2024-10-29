@csrf

<div class="mb-4">
    <x-label class="my-2 italic capitalize" value="{{ __('name of role') }}" for="name" />
    <x-input type="text" name="name" class="w-full" placeholder="{{ __('input name of role') }}"
        value="{{ old('name', $role->name) }}" />
    <x-input-error for="name" />
</div>

<div class="flex justify-around">
    <button type="submit"
        class="bg-blue-700 text-white hover:bg-green-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        {{ __($btn) }}

    </button>
    <a type="button" href="{{ route('roles.index') }}"
        class="bg-yellow-500 text-white hover:bg-red-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center no-underline">
        {{ __('cancel') }}
    </a>
</div>
