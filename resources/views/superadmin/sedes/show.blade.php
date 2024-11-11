<x-app-layout>
    <div class="w-full p-10 mx-auto my-1 bg-white rounded shadow-lg md:w-3/4">
        <div class="p-6 mx-auto my-0 bg-slate-100 rounded-xl">
            <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
                {{ $sede->name }}</h2>

            <form action="#">

                <div class="mb-1">
                    <x-label class="my-2 italic capitalize" value="{{ __('school') }}" for="school_id" />
                    <x-input type="text" name="name" class="w-full" placeholder="{{ __('input name of sede') }}"
                        value="{{ old('name', $sede->school) }}" />
                    <x-input-error for="school_id" />
                </div>
                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                    <div class="col-span-1">
                        <div class="mb-1">
                            <x-label class="my-2 italic capitalize" value="{{ __('name of sede') }}" for="name" />
                            <x-input type="text" name="name" class="w-full"
                                placeholder="{{ __('input name of sede') }}" value="{{ old('name', $sede->name) }}" />
                            <x-input-error for="name" />
                        </div>
                        <div class="mb-1">
                            <x-label class="my-2 italic capitalize" value="{{ __('address of sede') }}"
                                for="address" />
                            <x-input type="text" name="address" class="w-full"
                                placeholder="{{ __('input address of sede') }}"
                                value="{{ old('address', $sede->address) }}" />
                            <x-input-error for="address" />
                        </div>

                        <div class="mb-1">
                            <x-label class="my-2 italic capitalize" value="{{ __('department of sede') }}"
                                for="department" />
                            <x-input type="text" name="department" class="w-full"
                                placeholder="{{ __('input department of sede') }}"
                                value="{{ old('department', $sede->department) }}" />
                            <x-input-error for="department" />
                        </div>

                        <div class="mb-1">
                            <x-label class="my-2 italic capitalize" value="{{ __('municipality of sede') }}"
                                for="municipality" />
                            <x-input type="text" name="municipality" class="w-full"
                                placeholder="{{ __('input municipality of sede') }}"
                                value="{{ old('municipality', $sede->municipality) }}" />
                            <x-input-error for="municipality" />
                        </div>

                        <div class="mb-1">
                            <x-label class="my-2 italic capitalize" value="{{ __('email of sede') }}" for="email" />
                            <x-input type="text" name="email" class="w-full"
                                placeholder="{{ __('input email of sede') }}"
                                value="{{ old('email', $sede->email) }}" />
                            <x-input-error for="email" />
                        </div>

                        <div class="mb-1">
                            <x-label class="my-2 italic capitalize" value="{{ __('phone of sede') }}" for="phone" />
                            <x-input type="text" name="phone" class="w-full"
                                placeholder="{{ __('input phone of sede') }}"
                                value="{{ old('phone', $sede->phone) }}" />
                            <x-input-error for="phone" />
                        </div>
                        <div class="mb-1">
                            <x-label class="my-2 italic capitalize" value="{{ __('cell of sede') }}" for="cell" />
                            <x-input type="text" name="cell" class="w-full"
                                placeholder="{{ __('input cell of sede') }}" value="{{ old('cell', $sede->cell) }}" />
                            <x-input-error for="cell" />
                        </div>


                    </div>
                    <div class="col-span-1">
                        <div class="mb-1">
                            <x-label class="my-2 italic capitalize" value="{{ __('logo of sede') }}" for="logo" />
                            <input type="file" name="logo" id="fichero" class="text-xs text-center">
                            <div class="p-4">
                                @if ($sede->logo)
                                    <img id="img" class="object-cover my-2 rounded-md max-h-48"
                                        style="max-height: 190px" src="{{ asset($sede->logo) }}" />
                                @else
                                    <img id="img" class="object-cover my-2 rounded-md max-h-48"
                                        style="max-height: 190px" src="{{ asset('img/schools/foto.png') }}" />
                                @endif
                            </div>
                            <x-input-error for="logo" />
                            <p id="texto" class="text-xs text-center text-red-500"></p>
                        </div>
                        <div class="mb-1">
                            <x-label class="my-2 italic capitalize" value="{{ __('image of sede') }}"
                                for="image" />
                            <input type="file" name="image" id="fichero1" class="text-xs text-center">
                            <div class="p-4">

                                @if ($sede->image)
                                    <img id="img1" class="object-cover my-2 rounded-md max-h-48"
                                        style="max-height: 190px" src="{{ asset($sede->image) }}" />
                                @else
                                    <img id="img1" class="object-cover my-2 rounded-md max-h-48"
                                        style="max-height: 190px" src="{{ asset('img/schools/school.jpg') }}" />
                                @endif
                            </div>
                            <x-input-error for="image" />
                            <p id="texto1" class="text-xs text-center text-red-500"></p>
                        </div>
                    </div>
                </div>




                <a type="button" href="{{ route('sedes.index') }}"
                    class="bg-yellow-500 text-white hover:bg-red-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center no-underline">
                    {{ __('back') }}

                </a>
            </form>
        </div>
    </div>

</x-app-layout>
