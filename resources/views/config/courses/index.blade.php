<x-app-layout>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css"> --}}
    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold uppercase sm:w-full md:w-3/4">{{ __('course adminitration panel') }}</h2>
    </x-slot>

    <div class="mt-10">
        <div class="w-full mx-auto text-center card md:w-3/4 min-w-12">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of courses') }}
                    </h4>

                    <a href="{{ route('courses.create') }}" class="text-white cursor-pointer"
                        title="{{ __('add course') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="course" class="table table-hover" style="width:100%">
                    <thead>
                        <tr class="text-left">
                            <th>{{ __('id') }}</th>
                            <th>{{ __('grado') }}</th>
                            <th>{{ __('course') }}</th>
                            <th>{{ __('actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr style="text-align: justify">
                                <td width="20%">{{ $course->id }}</td>
                                <td width="20%">{{ $course->grado }}</td>
                                <td width="40%">{{ $course->name }}</td>
                                <td width="20%"
                                    class="grid justify-around w-full grid-cols-1 gap-3 mx-auto text-center md:grid-cols-3"
                                    title="{{ __('detail of') . ' ' . $course->name }}">
                                    <a href="{{ route('courses.show', $course->id) }}" class="text-green-600">
                                        <i class="text-blue-500 icono fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{ route('courses.edit', $course->id) }}"
                                        title="{{ __('edit') . ' ' . $course->name }}">
                                        <i class="text-blue-500 icono fa-solid fa-pencil"></i>

                                    </a>

                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                        class="text-red-600 form-delete"
                                        title="{{ __('delete') . ' ' . $course->name }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="text-red-500 icono fa-solid fa-trash"></i>
                                        </button>

                                    </form>
                                    <a href="{{ route('courses.edit', $course->id) }}"
                                        title="{{ __('add requeriments') . ' ' . $course->name }}">
                                        <i class="text-blue-500 icono fa-solid fa-glasses"></i>

                                    </a>
                                    <a href="{{ route('courses.edit', $course->id) }}">
                                        <i class="text-blue-500 icono fa-solid fa-bullseye"></i>

                                    </a>

                                    <a href="{{ route('courses.edit', $course->id) }}">
                                        <i class="text-blue-500 icono fa-solid fa-person-chalkboard"></i>

                                    </a>
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
                $('#course').DataTable({
                    "responsive": true,
                    "columnDefs": [{
                        "targets": [3],
                        "orderable": false
                    }]

                });
                setTimeout(function() {
                    $('#alert').remove()
                }, 300)

            });

            $('.form-delete').submit(function(e) {

                e.preventDefault();


                Swal.fire({
                    title: 'Está seguro de querer eliminar materia?',
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
        </script>
    @endpush
</x-app-layout>
