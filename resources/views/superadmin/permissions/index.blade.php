<x-app-layout>
    <x-slot name="header">
        <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('permission adminitration panel') }}</h2>
    </x-slot>

    <div class="container mt-10">
        <div class="w-1/2 mx-auto text-center card md:w-1/2 min-w-12">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4>
                        {{ __('list of permissions') }}
                    </h4>


                </div>
            </div>
            <div class="card-body">
                <table id="permission" class="table table-striped text-[clamp(14px,1.1vw,18px)]" style="width:100%;">
                    <thead>
                        <tr>
                            <th>{{ _('id') }}</th>
                            <th>{{ __('permission name') }}</th>
                            <th>{{ __('privilege') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td width="20%">{{ $permission->id }}</td>
                                <td width="40%">{{ $permission->name }}</td>
                                <td width="40%">{{ $permission->privilege }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>





    @push('script')
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script> --}}



        <script>
            $(document).ready(function() {
                $('#permission').DataTable({
                    "columnDefs": [{
                        "targets": [2],
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
                setTimeout(function() {
                    $('#alert').remove()
                }, 300);


                $('.form-delete').submit(function(e) {

                    e.preventDefault();
                    alert('XXX');

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
                });

            });
        </script>
    @endpush
</x-app-layout>
