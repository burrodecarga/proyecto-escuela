<x-app-layout>
    <x-slot name="header">
        <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('sede coordinator administration panel') }}</h2>
    </x-slot>

    <div class="container mt-10">
        <div class="w-full mx-auto text-center card md:w-100">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4>
                        {{ __('list of candidates') }}
                    </h4>
                    <h4>
                        {{ $sede->name }}
                    </h4>

                </div>
            </div>
            <div class="card-body">
                <table id="user" class="table text-sm table-hover" style="width:100%">
                    <thead>
                        <tr style="text-align: justify">
                            <th width="10%" style="text-align: center">{{ __('id') }}</th>
                            <th width="25%">{{ __('name') }}</th>
                            <th width="25%" style="text-align: justify">{{ __('cédula') }}</th>
                            <th width="15%">{{ __('phone') }}</th>
                            <th width="10%">{{ __('role') }}</th>
                            <th width="15%" style="text-align: center">actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        @foreach ($users as $user)
                            <tr>
                                <th width="10%" style="text-align: center">{{ $user->id }}</th>
                                <th width="25%">{{ $user->name }} </th>
                                <th width="25%" style="text-align: justify">{{ $user->cedula }} </th>
                                <th width="15%">{{ $user->phone }} </th>
                                <th width="10%">{{ $user->rol }}</th>
                                <th width="15%" style="text-align: center">
                                    <form action="{{ route('sedes.assign') }}" method="POST" class="form-asignar">
                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                                        <input type="hidden" name="sede_id" value="{{ $sede->id }}">
                                        @csrf
                                        @method('POST')
                                        <button type="submit"><i
                                                title="{{ __('assign admin') . ' : ' . $user->name }}"
                                                class="text-blue-500 icono fa-solid fa-user-tie"></i></button>
                                    </form>
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
                $('#user').DataTable({
                    "columnDefs": [{
                        "targets": [5],
                        "orderable": false
                    }],
                    language: {
                        info: 'Mostrando pag. _PAGE_ of _PAGES_',
                        infoEmpty: 'No hay regiastros diponibles',
                        infoFiltered: '(filtro de _MAX_ total)',
                        lengthMenu: 'Ver _MENU_ reg. por pag.',
                        zeroRecords: 'No hay registros'
                    }

                });
                setTimeout(function() {
                    $('#alert').remove()
                }, 300);


                $('.form-asignar').submit(function(e) {

                    e.preventDefault();


                    Swal.fire({
                        title: 'Desea asignar el coordinador de la sede escolar?',
                        text: "Esta operación es totalmente modificable",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, Asignar como coordinador!'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            this.submit();

                        }
                    })
                });

            });
        </script>
    @endpush
</x-app-layout>