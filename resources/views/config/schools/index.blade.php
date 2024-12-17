<x-app-layout>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <x-slot name="header">
        <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('school adminitration panel') }}</h2>
    </x-slot>

    <div class="w-11/12 mx-auto mt-10">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between uppercase">
                    <h4 class="text-white">
                        {{ __('list of schools') }}
                    </h4>
                    @canRole('schools.create')
                    <a href="{{ route('schools.create') }}" class="text-white cursor-pointer"
                        title="{{ __('add school') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                    @endcanRole
                </div>
            </div>
            <div class="card-body">
                <table id="school" class="table table-striped text-[clamp(10px,1vw,14px)]" style="width:100%;">
                    <thead>
                        <tr style="text-align: justify">
                            <th style="text-align: center">{{ __('id') }}</th>
                            <th>{{ __('name') }}</th>
                            <th>{{ __('nit') }} /{{ __('dane') }}</th>
                            <th>{{ __('administrator') }}</th>
                            <th class="text-center"> {{ __('action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schools as $school)
                            <tr style="text-align: justify">
                                <td width="10%" style="text-align: center">{{ $school->id }}</td>
                                <td width="25%">{{ $school->name }}</td>
                                <td width="15%">{{ $school->nit }}<br>
                                    {{ $school->dane }}</td>
                                <td width="20%">{{ $school->administrator_name }}</td>
                                <td width=""
                                    class="grid items-center justify-between grid-cols-1 gap-3 text-center md:grid-cols-2">
                                    @canRole('schools.administrator')
                                    <a class="block" href="{{ route('schools.administrator', $school->id) }}"
                                        class="text-green-600" title="{{ __('assign administrator to school') }}">
                                        <i class="fa-solid icono fa-user-tie"></i>
                                    </a>
                                    @endcanRole
                                    @canRole('schools.show')
                                    <a class="block" href="{{ route('schools.show', $school->id) }}"
                                        class="text-green-600" title="{{ __('view detail of school') }}">
                                        <i class="fa-solid icono fa-eye"></i>
                                    </a>
                                    @endcanRole
                                    @canRole('schools.edit')
                                    <a class="block" href="{{ route('schools.edit', $school->id) }}"
                                        title="{{ __('edit school') }}">
                                        <i class="fa-solid icono fa-pencil"></i>
                                    </a>
                                    @endcanRole
                                    @canRole('schools.destroy')
                                    <form action="{{ route('schools.destroy', $school->id) }}" method="POST"
                                        class="text-red-600 form-delete" title="{{ __('delete school') }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="fa-solid icono fa-trash"></i>
                                        </button>
                                    </form>
                                    @endcanRole
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
                $('#school').DataTable({
                    responsive: true,
                    "columnDefs": [{
                        "targets": [4],
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
