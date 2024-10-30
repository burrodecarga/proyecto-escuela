<x-admin-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold capitalize sm:w-full md:w-3/4">{{ __('school adminitration panel') }}
        </h2>
    </x-slot>

    <div class="container mt-10">
        <div class="mx-auto text-center w-5/4 card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4>
                        {{ __('school sede') }}
                    </h4>


                </div>
            </div>
            <div class="card-body">
                <div class="flex flex-col items-center justify-center w-full p-8 border border-gray-200 rounded-lg">
                    <div> <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500 fill-current"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M0 3.75A.75.75 0 01.75 3h7.497c1.566 0 2.945.8 3.751 2.014A4.496 4.496 0 0115.75 3h7.5a.75.75 0 01.75.75v15.063a.75.75 0 01-.755.75l-7.682-.052a3 3 0 00-2.142.878l-.89.891a.75.75 0 01-1.061 0l-.902-.901a3 3 0 00-2.121-.879H.75a.75.75 0 01-.75-.75v-15zm11.247 3.747a3 3 0 00-3-2.997H1.5V18h6.947a4.5 4.5 0 012.803.98l-.003-11.483zm1.503 11.485V7.5a3 3 0 013-3h6.75v13.558l-6.927-.047a4.5 4.5 0 00-2.823.971z">
                            </path>
                        </svg> </div>
                    <div class="mt-8 text-center">
                        <h1 class="text-4xl">{{ $sede->name }}</h1>
                        <p class="m-0 mx-auto text-gray-500 lg:w-1/2">{{ $sede->address }}
                        </p>
                        <p class="m-0 mx-auto text-gray-500 lg:w-1/2">{{ $sede->department }} -
                            {{ $sede->municipality }}
                        </p>
                        <p class="m-0 mx-auto text-gray-500 lg:w-1/2">{{ __('phone') . ' : ' . $sede->phone }} -
                            {{ __('cell') . ' : ' . $sede->cell }}
                        </p>
                        <p class="m-0 mx-auto text-gray-500 lg:w-1/2">{{ $sede->email }}
                        </p>
                    </div> <button
                        class="mt-8 block rounded-lg border border-green-700 bg-green-600 py-1.5 px-4 font-medium text-white transition-colors hover:bg-green-700 active:bg-green-800 disabled:opacity-50">Get
                        started</button> <button
                        class="mt-2 block rounded-lg bg-transparent py-1.5 px-4 font-medium text-blue-600 transition-colors hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Learn
                        more</button>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>