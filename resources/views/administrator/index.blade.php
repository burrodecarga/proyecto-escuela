<x-app-layout>
    <div class="container my-10">
        <div class="grid grid-cols-3 gap-5">
            <div class="flex flex-col rounded-2xl w-full bg-[#ffffff] shadow-xl">
                <!--[-->
                <figure class="flex items-center justify-center rounded-2xl">
                    <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png"
                        alt="Card Preview" class="rounded-t-2xl">
                </figure>
                <!--]-->
                <div class="flex flex-col p-8">
                    <div class="text-2xl font-bold   text-[#374151] pb-6 uppercase text-center">
                        {{ __('assign administrator to school') }}
                    </div>
                    <div class=" text-lg   text-[#374151]">
                        {{ __('the school administrator is in charge of assigning resources and coordinators to schools and locations') }}
                    </div>
                    <!--[-->
                    <div class="flex justify-end pt-6">
                        <button onclick="window.location='{{ route('administrator.asignar', []) }}'"
                            class="bg-[#7e22ce] text-[#ffffff] w-full font-bold text-base  p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">{{ __('proceed') }}
                        </button>
                    </div>
                    <!--]-->
                </div>
            </div>
            <div class="flex
                            flex-col rounded-2xl w-full bg-[#ffffff] shadow-xl">
                <!--[-->
                <figure class="flex items-center justify-center rounded-2xl">
                    <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png"
                        alt="Card Preview" class="rounded-t-2xl">
                </figure>
                <!--]-->
                <div class="flex flex-col p-8">
                    <div class="text-2xl font-bold   text-[#374151] pb-6">Generator</div>
                    <div class=" text-lg   text-[#374151]">Leverage a graphical editor to create, design and
                        customize
                        beautiful
                        web components.</div>
                    <!--[-->
                    <div class="flex justify-end pt-6">
                        <button
                            class="bg-[#7e22ce] text-[#ffffff] w-full font-bold text-base  p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Try
                            it out!</button>
                    </div>
                    <!--]-->
                </div>
            </div>
            <div class="flex flex-col rounded-2xl w-full bg-[#ffffff] shadow-xl">
                <!--[-->
                <figure class="flex items-center justify-center rounded-2xl">
                    <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png"
                        alt="Card Preview" class="rounded-t-2xl">
                </figure>
                <!--]-->
                <div class="flex flex-col p-8">
                    <div class="text-2xl font-bold   text-[#374151] pb-6">Generator</div>
                    <div class=" text-lg   text-[#374151]">Leverage a graphical editor to create, design and
                        customize
                        beautiful
                        web components.</div>
                    <!--[-->
                    <div class="flex justify-end pt-6">
                        <button
                            class="bg-[#7e22ce] text-[#ffffff] w-full font-bold text-base  p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Try
                            it out!</button>
                    </div>
                    <!--]-->
                </div>
            </div>

            <div class="flex flex-col rounded-2xl w-full bg-[#ffffff] shadow-xl">
                <!--[-->
                <figure class="flex items-center justify-center rounded-2xl">
                    <img src="https://tailwind-generator.b-cdn.net/images/card-generator/tailwind-card-generator-card-preview.png"
                        alt="Card Preview" class="rounded-t-2xl">
                </figure>
                <!--]-->
                <div class="flex flex-col p-8">
                    <div class="text-2xl font-bold   text-[#374151] pb-6">Generator</div>
                    <div class=" text-lg   text-[#374151]">Leverage a graphical editor to create, design and
                        customize
                        beautiful
                        web components.</div>
                    <!--[-->
                    <div class="flex justify-end pt-6">
                        <button
                            class="bg-[#7e22ce] text-[#ffffff] w-full font-bold text-base  p-3 rounded-lg hover:bg-purple-800 active:scale-95 transition-transform transform">Try
                            it out!</button>
                    </div>
                    <!--]-->
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
