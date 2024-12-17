<div class="p-2 my-3 bg-gray-200 rounded-xl">
    <h3 class="font-bold text-center capitalize">{{ __('assignable permissions') }}</h3>

</div>
<input type="hidden" name="id" value="{{ $role->id }}">
<div class="">
    <div class="grid grid-cols-2">
        @foreach ($permissions as $key => $p)
            <label for="permissions">
                <input type="checkbox" name="permissions[]" id="permissions" value="{{ $p->name }}"
                    {{ in_array($p->id, $permissions_id) ? 'checked' : '' }}>
                <span style="ml-2">

                    {{ $p->name }}
                    </p>
            </label>
        @endforeach
    </div>
</div>
