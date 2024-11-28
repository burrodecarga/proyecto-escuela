<div>
    <div class="container grid grid-cols-2 gap-3 mt-10">
        <div class="w-full mx-auto text-center card md:w-100">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of candidates') }}
                    </h4>
                    <h4 class="text-white">

                    </h4>

                </div>
            </div>
            <div class="card-body">
                <table id="user" class="table text-sm font-normal table-hover" style="width:100%">
                    <thead>
                        <tr style="text-align: justify">
                            <th width="10%">{{ __('id') }}</th>
                            <th width="25%">{{ __('name') }}</th>
                            <th width="25%">{{ __('cédula') }}</th>
                            <th width="10%">{{ __('role') }}</th>
                            <th width="15%" style="text-align: center">actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        @foreach ($users as $user)
                            <tr>
                                <th class="text-[11px] font-thin" width="10%">{{ $user->id }}</th>
                                <th class="text-[11px] font-thin" width="40%">
                                    {{ $user->name . ' ' . $user->last_name }}
                                </th>
                                <th class="text-[11px] font-thin" width="20%">{{ $user->cedula }} </th>
                                <th class="text-[11px] font-thin" width="15%">{{ $user->rol }}</th>
                                <th width="15%" style="text-align: center">
                                    <a class="cursor-pointer"
                                        wire:click="addStudent({{ $user->id }} , {{ $grado_sede->id }})"
                                        title="{{ __('add students to grado') . ' ' . $grado->name }} {{ __('section') }}  : {{ $grado_sede->letra }}"><i
                                            class="text-blue-500 icono fa-solid fa-users"></i></a>
                                </th>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        {{-- Seleccionados --}}
        <div class="w-full mx-auto text-center card md:w-100">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of selected') }}
                    </h4>
                    <h4 class="text-white">

                    </h4>

                </div>
            </div>
            <div class="card-body">
                <table id="selected" class="table text-sm font-normal table-hover" style="width:100%">
                    <thead>
                        <tr style="text-align: justify">
                            <th width="10%">{{ __('id') }}</th>
                            <th width="25%">{{ __('name') }}</th>
                            <th width="25%">{{ __('last_name') }}</th>
                            <th width="25%">{{ __('cedula') }}</th>
                            <th width="15%" style="text-align: center">actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-left" style="font-size: 12px;font-weight: 100;">
                        @foreach ($seleccionados as $seleccionado)
                            <tr style="font-size: 12px;font-weight: 100;">
                                <th width="10%">{{ $seleccionado->user_id }}</th>
                                <th width="25%">{{ $seleccionado->name }} </th>
                                <th width="20%">{{ $seleccionado->last_name }} </th>
                                <th width="20%">{{ $seleccionado->cedula }} </th>
                                <th width="15%" style="text-align: center">
                                    <a class="cursor-pointer"
                                        wire:click="delStudent({{ $seleccionado->user_id }} , {{ $grado_sede->id }})"
                                        title="{{ __('del students to grado') . ' ' . $grado->name }} {{ __('section') }}  : {{ $grado_sede->letra }}"><i
                                            class="text-red-500 icono fa-solid fa-users"></i></a>
                                </th>
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
                $('#user').DataTable({
                    "columnDefs": [{
                        "targets": [4],
                        "orderable": false
                    }],
                    language: {
                        info: 'pag. _PAGE_ of _PAGES_ reg:_TOTAL_',
                        infoEmpty: 'No hay registros diponibles',
                        infoFiltered: '(filtro de _MAX_ total)',
                        lengthMenu: '_MENU_',
                        zeroRecords: 'No hay registros',
                        search: ''
                    }

                });
                $('#selected').DataTable({
                    "columnDefs": [{
                        "targets": [4],
                        "orderable": false
                    }],
                    language: {
                        info: 'pag. _PAGE_ of _PAGES_ reg:_TOTAL_',
                        infoEmpty: 'No hay registros diponibles',
                        infoFiltered: '(filtro de _MAX_ total)',
                        lengthMenu: '_MENU_',
                        zeroRecords: 'No hay registros',
                        search: ''
                    }

                });
                setTimeout(function() {
                    $('#alert').remove()
                }, 300);

                $('.form-asignar').submit(function(e) {

                    e.preventDefault();
                    alert('Asignar Profesor')

                    Swal.fire({
                        title: 'Quiere asignar Administrador de Escuela?',
                        text: "Esta operación es Modificable",
                        icon: 'Question',
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
</div>
