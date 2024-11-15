<x-app-layout>
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

                    <a href="{{ route('schools.create') }}" class="text-white cursor-pointer"
                        title="{{ __('add school') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="school" class="table table-striped text-[clamp(10px,1vw,14px)]" style="width:100%;">
                    <thead>
                        <tr style="text-align: justify">
                            <th style="text-align: center">{{ __('id') }}</th>
                            <th>{{ __('name') }}</th>
                            <th>{{ __('nit') }}</th>
                            <th style="text-align: justify">{{ __('dane') }}</th>
                            <th>{{ __('administrator') }}</th>
                            <th class="text-center"> {{ __('action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($schools as $school)
                            <tr style="text-align: justify">
                                <td width="10%" style="text-align: center">{{ $school->id }}</td>
                                <td width="30%">{{ $school->name }}</td>
                                <td width="15%">{{ $school->nit }}</td>
                                <td width="15%" style="text-align: justify">{{ $school->dane }}</td>
                                <td width="20%">{{ $school->administrator_name }}</td>
                                <td width="" class="flex justify-around w-full mx-auto text-center">
                                    <a href="{{ route('schools.administrator', $school->id) }}" class="text-green-600"
                                        title="{{ __('assign administrator to school') }}">
                                        <i class="fa-solid fa-user-tie"></i>
                                    </a>
                                    <a href="{{ route('schools.show', $school->id) }}" class="text-green-600"
                                        title="{{ __('view detail of school') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </a>
                                    <a href="{{ route('schools.edit', $school->id) }}"
                                        title="{{ __('edit school') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </a>

                                    <form action="{{ route('schools.destroy', $school->id) }}" method="POST"
                                        class="text-red-600 form-delete" title="{{ __('delete school') }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M3 12l6.414 6.414a2 2 0 001.414.586H19a2 2 0 002-2V7a2 2 0 00-2-2h-8.172a2 2 0 00-1.414.586L3 12z" />
                                            </svg>
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





    @push('script')
        <script>
            $(document).ready(function() {
                $('#school').DataTable({
                    responsive: true,
                    "columnDefs": [{
                        "targets": [5],
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
