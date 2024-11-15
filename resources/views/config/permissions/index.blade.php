<x-app-layout>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <x-slot name="header">
        <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('permission adminitration panel') }}</h2>
    </x-slot>

    <div class="w-[500px] mx-auto mt-10">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
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
        <script>
            $(document).ready(function() {
                $('#permission').DataTable({
                    responsive: true,
                    destroy: true,
                    columnDefs: [{
                        "targets": [2],
                        "orderable": false
                    }],
                    language: {
                        info: 'pag. _PAGE_ of/ _PAGES_ Total: _TOTAL_',
                        infoEmpty: 'No hay regiastros diponibles',
                        infoFiltered: '(filtro de _MAX_ total)',
                        lengthMenu: '_MENU_ reg./pag.',
                        zeroRecords: 'No hay registros',
                        search: 'buscar'
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

            });
        </script>
    @endpush
</x-app-layout>
