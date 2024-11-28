<x-app-layout>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('sedes management panel') }}
        </h2>
    </x-slot>

    <div class="w-11/12 mx-auto mt-0">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of school locations') }}
                    </h4>
                    <a href="#" class="text-white no-underline cursor-pointer" title="{{ __('school period') }}">
                        {{ __('school period') }} : {{ $periodo->lapso }} </a>
                </div>
            </div>
            <div class="card-body">
                <table id="sede" class="table text-sm table-hover responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-base text-left uppercase">{{ __('school') }}/{{ __('sede') }}</th>
                            <th class="text-base text-left uppercase">{{ __('department') }}/
                                {{ __('municipality') }}</th>
                            <th class="text-base text-left uppercase">{{ __('coordinators') }}</th>
                            <th class="text-center uppercase"> {{ __('action') }}</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach ($sedes as $sede)
                            <tr class="text-base odd:bg-slate-100">
                                <td width="25%" class="text-left">
                                    {{ $sede->school }}<br>{{ $sede->name }}</td>
                                <td width="15%" class="text-left">{{ $sede->department }}<br>
                                    {{ $sede->municipality }}</td>
                                <td width="25%" class="text-left">
                                    @forelse ($sede->coordinadores as $coordinador)
                                        <p class="m-0">{{ $coordinador->name }}</p>
                                    @empty
                                        {{ __('no active') }}
                                    @endforelse

                                </td>
                                <td class="grid grid-cols-1 gap-3 md:grid-cols-3">
                                    <a href="{{ route('gestion.secciones', $sede->id) }}" class="text-green-600"
                                        title="{{ __('add multiple grado to the school headquarters') }}">
                                        <i class="fa-solid icono fa-list"></i>
                                    </a>
                                    <a href="{{ route('gestion.create_lectivo', $sede->id) }} " class="text-green-600"
                                        title="{{ __('term study plan') }}">
                                        <i class="fa-solid icono fa-list-ol"></i>
                                    </a>
                                    <a href="{{ route('gestion.lectivo_by_sede', [$sede->id]) }}"
                                        title="{{ __('view detail of all lective courses') . ' ' . $sede->name }}"><i
                                            class="text-blue-500 icono fa-solid fa-list-check"></i></a>

                                    <a href="{{ route('gestion.grados_by_sede', [$sede->id]) }}"
                                        title="{{ __('config grados by sede') . ' ' . $sede->name }}"><i
                                            class="text-blue-500 icono fa-solid fa-users-rectangle"></i></a>

                                    <a href="{{ route('gestion.students_of_sede', [$sede->id]) }}"
                                        title="{{ __('students of sede') . ' ' . $sede->name }}"><i
                                            class="text-blue-500 icono fa-solid fa-graduation-cap"></i></a>

                                    <a href="{{ route('gestion.courses_of_sede', [$sede->id]) }}"
                                        title="{{ __('test manegement') . ' ' . $sede->name }}"><i
                                            class="text-blue-500 icono fa-solid fa-graduation-cap"></i></a>
                                    <form action="{{ route('sedes.destroy', $sede->id) }}" method="POST"
                                        class="text-red-600 form-delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="text-red-500 icono fa-solid fa-trash "></i>
                                        </button>
                                    </form>
                                    <br>
                                    <br>
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
                //Session Flash auto close
                setTimeout(function() {
                    $('#alert').remove()
                }, 2000)

                $('#sede').DataTable({
                    responsive: true,
                    pagingType: "full_numbers",
                    language: {
                        info: 'Pag. _PAGE_ de _PAGES_, reg.:_MAX_',
                        infoEmpty: 'No hay regiastros diponibles',
                        infoFiltered: '(filtro de _MAX_ total)',
                        lengthMenu: 'Ver _MENU_ reg. por pag.',
                        zeroRecords: 'No hay registros'
                    },

                    "columnDefs": [{
                        "targets": [3],
                        "orderable": false
                    }]
                });

                $(function() {
                    $(document).tooltip();
                });
            })
        </script>
        <style>
            label {
                //  display: inline-block;
                width: 5em;
            }

            div>label>select {}

            </script>@endpush @push('script') @endpush </x-app-layout>
