<x-app-layout>
    @push('css')
    @endpush
    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold capitalize sm:w-full md:w-3/4">{{ __('grado adminitration panel') }}
        </h2>
    </x-slot>

    <div class="w-11/12 mx-auto mt-10">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4>
                        {{ __('list of grados') }}
                    </h4>

                    <a href="{{ route('grados.create') }}" class="text-white cursor-pointer" title="{{ __('add grado') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="grado" class="table text-sm table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>{{ __('num') }}</th>
                            <th>{{ __('ordinal') }}</th>
                            <th>{{ __('grado') }}</th>
                            <th>{{ __('level') }}</th>
                            <th>{{ __('fullname') }}</th>
                            <th>{{ __('fullordinal') }}</th>
                            <th>{{ __('action') }}</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach ($grados as $grado)
                            <tr class="odd:bg-slate-100">
                                <td width="5%" class="text-left">{{ $grado->id }}</td>
                                <td width="5%" class="text-left">{{ $grado->ordinal }}</td>
                                <td width="20%" class="text-left">{{ $grado->name }}</td>
                                <td width="20%" class="text-left">{{ $grado->level }}</td>
                                <td width="20%" class="text-sm text-left">{{ $grado->full_name }}</td>
                                <td width="20%" class="text-sm text-left">{{ $grado->full_ordinal }}</td>
                                <td class="flex gap-4 text-center" width="">
                                    <a href="{{ route('grados.edit', $grado->id) }}"
                                        title="{{ __('edit grado') . ' ' . $grado->name }}"><i
                                            class="text-blue-500 icono fa-solid fa-pencil"></i></a>
                                    <form action="{{ route('grados.destroy', $grado->id) }}" method="POST"
                                        class="form-delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i
                                                title="{{ __('delete grado') . ' : ' . $grado->name }}"
                                                class="text-red-500 icono fa-solid fa-trash-can"></i></button>
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
                $('#grado').DataTable({
                    "columnDefs": [{
                        "targets": [6],
                        "orderable": false
                    }],
                    language: {
                        info: 'Pag. _PAGE_ de _PAGES_, reg.:_MAX_',
                        infoEmpty: 'No hay regiastros diponibles',
                        infoFiltered: '(filtro de _MAX_ total)',
                        lengthMenu: 'Ver _MENU_ reg. por pag.',
                        zeroRecords: 'No hay registros',
                        entries: {
                            _: 'roles',
                            1: 'rol',
                        }
                    }

                });

                $('.form-delete').submit(function(e) {
                    e.preventDefault();
                    alert('delete action')

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

            })
        </script>
    @endpush
</x-app-layout>
