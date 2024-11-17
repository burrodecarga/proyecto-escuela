@csrf

<div class="mb-4">
    <x-label class="my-2 italic capitalize" value="{{ __('grado') }}" for="grado" />
    <select name="grado_id" class="w-full rounded">
        @foreach ($grados as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
        @endforeach
    </select>
    <x-input-error for="grado" />
</div>

<div class="mb-4">
    <x-label class="my-2 italic capitalize" value="{{ __('name of course') }}" for="name" />
    <x-input type="text" name="name" class="w-full" placeholder="{{ __('input name of course') }}"
        value="{{ old('name', $course->name) }}" />
    <x-input-error for="name" />
</div>
<div class="mb-4">
    <x-label class="my-2 italic capitalize" value="{{ __('subtitle of course') }}" for="subtitle" />
    <x-input type="text" name="subtitle" class="w-full" placeholder="{{ __('input subtitle of course') }}"
        value="{{ old('subtitle', $course->subtitle) }}" />
    <x-input-error for="subtitle" />
</div>

<div class="col-span-1 mb-4 md:col-span-3">
    <x-label class="my-2 italic capitalize" value="{{ __('description of course') }}" for="description" />
    <textarea type="textarea" cols="2" rows="2" name="description" class="w-full rounded"
        placeholder="{{ __('input description of course') }}" value="{{ old('description', $course->description) }}"></textarea>
    <x-input-error for="description" />
</div>



<button type="submit"
    class="bg-blue-700 text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
    {{ __($btn) }}

</button>

<a type="button" href="{{ route('courses.index') }}"
    class="bg-yellow-700 text-white hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
    {{ __('cancel') }}

</a>
