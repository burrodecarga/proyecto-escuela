<div
    class="relative p-5 max-w-sm  min-h-['315px'] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="object-cover h-48 rounded-t-lg w-96" src="{{ asset('img/books.svg') }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ __('books') }}:
            </h5>
        </a>
        <ol class="px-2 mb-4 list-decimal">
            @forelse ($lesson->pdfs as $pdf)
                <li><span class="text-sm font-semibold ">
                        {{ $pdf->title }}
                    </span></li>
            @empty
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {{ __('does not have supporting material information in written form') }}.</p>
            @endforelse
        </ol>

        <a wire:click="$set('openPdfModal',true)" href="#"
            class="absolute inline-flex items-center px-3 py-2 mt-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg bottom-3 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            {{ __('add pdf') }}
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
    <div class="">
        @include('components.modales.addPdfModal')
    </div>
</div>