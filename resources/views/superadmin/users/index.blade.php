<x-app-layout>
    <x-slot name="header">
        <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('user adminitration panel') }}</h2>
    </x-slot>

    <div class="container mt-10">
        <div class="w-full mx-auto text-center card md:w-100">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4>
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
                <table id="user" class="table text-sm table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th width="10%">Id</th>
                            <th width="25%">Name</th>
                            <th width="25%">Email</th>
                            {{-- <th width="30%">Address</th> --}}
                            <th width="15%">Phone</th>
                            <th width="10%">Role</th>
                            <th width="15%" style="text-align: center">actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">

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
                $('#user').DataTable({
                    "responsive": true,
                    "columnDefs": [{
                        "targets": [5],
                        "orderable": false,
                        "searchable": false
                    }],
                    language: {
                        info: 'Pag. _PAGE_ de _PAGES_, reg.:_MAX_',
                        infoEmpty: 'No hay regiastros diponibles',
                        infoFiltered: '(filtro de _MAX_ total)',
                        lengthMenu: 'Ver _MENU_ reg. por pag.',
                        zeroRecords: 'No hay registros',
                        entries: {
                            _: 'usuarios',
                            1: 'usuario',
                        }
                    },

                    "serverSide": true,
                    "ajax": "{{ url('api/users') }}",
                    "columns": [{
                            data: 'id'
                        },
                        {
                            data: 'name'
                        },
                        {
                            data: 'email'
                        },

                        {
                            data: 'phone'
                        },
                        {
                            data: 'rol'
                        },
                        {
                            data: 'btn'
                        },

                    ]

                });
                setTimeout(function() {
                    $('#alert').remove()
                }, 3000);



                $('.form-delete').submit(function(e) {
                    aler('XX')
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
                            // Swal.fire(
                            //   'Deleted!',
                            //   'Your file has been deleted.',
                            //   'success'
                            // )
                        }
                    })


                })

            });
        </script>
    @endpush
</x-app-layout>
