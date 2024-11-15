<x-app-layout>
    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold capitalize sm:w-full md:w-3/4">{{ __('room adminitration panel') }}
        </h2>
    </x-slot>

    <div class="p-10 mx-10">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of rooms') }}
                    </h4>

                    <a href="{{ route('rooms.create') }}" class="text-white cursor-pointer" title="{{ __('add room') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="room" class="table text-xs table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th>{{ __('num') }}</th>
                            <th>{{ __('school') }}</th>
                            <th>{{ __('sede') }}</th>
                            <th>{{ __('room') }}</th>
                            <th class="text-center">{{ __('width') }}</th>
                            <th class="text-center">{{ __('long') }}</th>
                            <th class="text-center">{{ __('high') }}</th>
                            <th class="text-center">{{ __('capacity') }}</th>
                            <th>{{ __('action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr class="odd:bg-slate-100">
                                <td width="5%" class="text-center">{{ $room->id }}</td>
                                <td width="25%" class="text-left">{{ $room->sede->school }}</td>
                                <td width="25%" class="text-left">{{ $room->sede->name }}</td>
                                <td width="20%" class="text-left">{{ $room->name }}</td>
                                <td width="5%" class="text-center">{{ $room->width }}</td>
                                <td width="5%" class="text-center">{{ $room->long }}</td>
                                <td width="5%" class="text-center">{{ $room->high }}</td>
                                <td width="10%" class="text-center">{{ $room->capacity }} <span
                                        class="text-sm">{{ __('people') }}</span></td>
                                <td class="flex gap-4 text-center" width="">
                                    <a href="{{ route('rooms.edit', $room->id) }}"
                                        title="{{ __('edit room') . ' ' . $room->name }}"><i
                                            class="text-blue-500 icono fa-solid fa-pen-to-square"></i></a>
                                    <form id="{{ $room->id }}" action="{{ route('rooms.destroy', $room->id) }}"
                                        method="POST" class="form-delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i title="{{ __('delete room') . ' : ' . $room->name }}"
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
                $('#room').DataTable({
                    "columnDefs": [{
                        "targets": [8],
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
                    alert('Delete')

                    Swal.fire({
                        title: 'Está seguro de querer eliminar espacio de escuela?',
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
            })
        </script>
    @endpush
</x-app-layout>
