<x-app-layout>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css"> --}}
    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold capitalize sm:w-full md:w-3/4">{{ __('resource adminitration panel') }}
        </h2>
    </x-slot>

    <div class="p-4 my-10">
        <div class="mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of resources') }}
                    </h4>

                    <a href="{{ route('resources.create') }}" class="text-white cursor-pointer"
                        title="{{ __('add resource') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="resource" class="table teble-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="10%">{{ __('num') }}</th>
                            <th width="10%">{{ __('ubication') }}</th>
                            <th width="10%">{{ __('category') }}</th>
                            <th width="10%">{{ __('name') }}</th>
                            <th width="10%">{{ __('description') }}</th>
                            <th width="10%">{{ __('quantity') }}</th>
                            <th width="10%">{{ __('action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resources as $resource)
                            <tr class="odd:bg-slate-100">
                                <td width="10%" class="text-left">{{ $resource->id }}</td>
                                <td width="10%" class="text-left">{{ $resource->ubication }}</td>
                                <td width="10%" class="text-left">{{ $resource->category }}</td>
                                <td width="10%" class="text-left">{{ $resource->name }}</td>
                                <td width="10%" class="text-left">{{ $resource->description }}</td>
                                <td width="10%" class="text-left">{{ $resource->quantity }}</td>
                                <td class="grid items-center justify-between grid-cols-2 gap-3" width="">
                                    <a href="{{ route('resources.edit', $resource->id) }}"
                                        title="{{ __('edit resource') . ' ' . $resource->name }}"><i
                                            class="text-blue-500 icono fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('resources.destroy', $resource->id) }}" method="POST"
                                        class="form-delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i
                                                title="{{ __('delete resource') . ' : ' . $resource->name }}"
                                                class="text-red-500 icono fa-solid fa-trash-can"></i></button>
                                    </form>
                                    <a href="{{ route('resources.create', [
                                        'resourceable_id' => $resource->resourceable_id,
                                        'resourceable_type' => $resource->resourceable_type,
                                        'ubication' => $resource->ubication,
                                    ]) }} "
                                        title="{{ __('add resource to resource') . ' ' . $resource->name }}"><i
                                            class="text-blue-500 icono fa-solid fa-users-gear"></i></a>
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
                $('#resource').DataTable({
                    responsive: true,
                    "columnDefs": [{
                        "targets": [6],
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
                });
                $(function() {
                    $(document).tooltip();
                });

            });
        </script>
    @endpush
</x-app-layout>
