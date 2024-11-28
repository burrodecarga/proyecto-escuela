<x-app-layout>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <x-slot name="header">
        <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('user adminitration panel') }}</h2>
    </x-slot>

    <div class="container mt-10">
        <div class="w-full mx-auto text-center card md:w-100">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of users') }}
                    </h4>

                    <a href="{{ route('users.create') }}" class="text-white cursor-pointer" title="{{ __('add user') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="user" class="table text-sm table-hover responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th width="10%">{{ __('id') }}</th>
                            <th width="15%">{{ __('name') }}</th>
                            <th width="15%">{{ __('last_name') }}</th>
                            <th width="15%">{{ __('cedula') }}</th>
                            <th width="15%">{{ __('periodo') }}</th>
                            <th width="10%">{{ __('grado') }} </th>
                            <th width="15%" style="text-align: center">actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        @foreach ($users as $user)
                            <tr>
                                <th class="text-[13px] font-thin" width="10%">{{ $user->id }}</th>
                                <th class="text-[13px] font-thin" width="15%">
                                    {{ $user->name }}
                                </th>
                                <th class="text-[13px] font-thin" width="15%">
                                    {{ $user->last_name }}
                                </th>
                                <th class="text-[13px] font-thin" width="15%">{{ $user->cedula }} </th>
                                <th class="text-[13px] font-thin" width="15%">
                                    {{ $user->periodo_name }}</th>
                                <th class="text-[13px] font-thin" width="15%">
                                    {{ $user->grado_name . '  ' . $user->letra }} </th>
                                <th width="15%" style="text-align: center">

                                </th>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                table = $('#user').DataTable({
                    "responsive": true,
                    "columnDefs": [{
                        "targets": [6],
                        "orderable": false,
                        "searchable": false
                    }],
                    language: {
                        info: 'Pag. _PAGE_ de _PAGES_, reg.:_MAX_',
                        infoEmpty: 'No hay regiastros diponibles',
                        infoFiltered: '(filtro de _MAX_ total)',
                        lengthMenu: 'Ver _MENU_ reg. por pag.',
                        zeroRecords: 'No hay registros'
                    },

                });

                setTimeout(function() {
                    $('#alert').remove()
                }, 3000);



                $('.form-delete').submit(function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Está seguro de querer eliminar escuela?',
                        text: "Esta operación es irreversible",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, Eliminar!'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            this.submit();

                        }
                    })


                })

            });
            $(function() {
                $(document).tooltip();
            });
        </script>
    @endpush
</x-app-layout>