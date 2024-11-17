<x-app-layout>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <x-slot name="header">
        <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('periodos adminitration panel') }}</h2>
    </x-slot>

    <div class="w-[500px] mx-auto mt-10">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of periodos') }}
                    </h4>


                </div>
            </div>
            <div class="card-body">
                <table id="periodos" class="table table-striped text-[clamp(14px,1.1vw,18px)]" style="width:100%;">
                    <thead>
                        <tr>
                            <th>{{ _('id') }}</th>
                            <th>{{ __('periodo') }}</th>
                            <th>{{ __('start') }}</th>
                            <th>{{ __('end') }}</th>
                            <th>{{ __('activo') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($periodos as $periodo)
                            <tr>
                                <td width="20%">{{ $periodo->id }}</td>
                                <td width="20%">{{ $periodo->year }}</td>
                                <td width="20%">{{ $periodo->start }}</td>
                                <td width="20%">{{ $periodo->end }}</td>
                                <td width="20%">
                                    <form action="{{ route('periodos.update', $periodo->id) }}" method="POST"
                                        class="form-periodo">
                                        @csrf
                                        @method('PUT')

                                        <button type="submit"><i
                                                title="{{ __('in progress') . ' : ' . $periodo->year }}"
                                                class="@if ($periodo->current == 1) text-green-500 @else text-red-500 @endif icono fa-regular fa-clock"></i></button>
                                    </form>
                                </td>

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
                $('#periodos').DataTable({
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


                $('.form-periodo').submit(function(e) {

                    e.preventDefault();


                    Swal.fire({
                        title: 'Desea cambiar periodo lectivo?',
                        text: "Esta operación es totalmente modificable",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#008000',
                        confirmButtonText: 'Si, Cambiar!'
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
