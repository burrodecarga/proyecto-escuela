<x-app-layout>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('css/dataTables.dataTables.css') }}"> --}}
    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('sedes adminitration panel') }}
        </h2>
    </x-slot>

    <div class="p-10 mt-0">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4>
                        {{ __('list of school locations') }}
                    </h4>
                    <a href="{{ route('sedes.create') }}" class="text-white cursor-pointer" title="{{ __('add sede') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="sede" class="table text-sm table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-sm text-left uppercase">{{ __('school') }}</th>
                            <th class="text-sm text-left uppercase">{{ __('sede') }}</th>
                            <th class="text-sm text-left uppercase">{{ __('department') }}</th>
                            <th class="text-sm text-left uppercase">{{ __('municipality') }}</th>
                            <th class="text-center uppercase"> {{ __('action') }}</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach ($sedes as $sede)
                            <tr class="odd:bg-slate-100">
                                <td width="25%" class="text-xs text-left">{{ $sede->school->name }}</td>
                                <td width="25%" class="text-left">{{ $sede->name }}</td>
                                <td width="15%" class="text-left">{{ $sede->department }}</td>
                                <td width="15%" class="text-left">{{ $sede->municipality }}</td>
                                <td class="flex gap-3 text-center" width="">
                                    <a href="{{ route('sedes.show', [$sede->id]) }}"
                                        title="{{ __('view detail of sede') . ' ' . $sede->name }}"><i
                                            class="text-blue-500 icono fa-solid fa-eye"></i></a>
                                    <a href="{{ route('sedes.edit', [$sede->id]) }}"
                                        title="{{ __('edit sede') . ' ' . $sede->name }}"><i
                                            class="text-blue-500 icono fa-solid fa-pencil"></i></a>
                                    <form action="{{ route('sedes.destroy', $sede->id) }}" method="POST"
                                        class="text-red-600 form-delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="text-red-500 icono fa-solid fa-trash"></i>
                                        </button>

                                    </form>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#sede').DataTable({
                    "responsive": true,
                    "pagingType": "full_numbers",
                    language: {
                        info: 'Pag. _PAGE_ de _PAGES_, reg.:_MAX_',
                        infoEmpty: 'No hay regiastros diponibles',
                        infoFiltered: '(filtro de _MAX_ total)',
                        lengthMenu: 'Ver _MENU_ reg. por pag.',
                        zeroRecords: 'No hay registros'
                    },

                    "columnDefs": [{
                        "targets": [4],
                        "orderable": false
                    }]
                });
                $('.form-delete').submit(function(e) {

                    e.preventDefault();


                    Swal.fire({
                        title: 'Está seguro de querer eliminar sede?',
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
                });

            });
        </script>
    @endpush
</x-app-layout>
