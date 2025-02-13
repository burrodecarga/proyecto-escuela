<x-app-layout>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <x-slot name="header">
        <h2 class="w-full text-xl font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('school term administration panel') }}
        </h2>
    </x-slot>

    <div class="w-11/12 mx-auto mt-0">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of subjects for the school period') }}
                    </h4>
                    <a href="#" class="text-white no-underline cursor-pointer" title="{{ __('school period') }}">
                        {{ __('school period') }} : {{ $periodo->lapso }} </a>
                </div>
            </div>
            <div class="card-body">
                <table id="sede" class="table text-sm table-hover responsive" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-base text-left uppercase">{{ __('level') }}/{{ __('course') }}</th>
                            <th class="text-base text-left uppercase">{{ __('grado') }}/{{ __('section') }}</th>
                            <th class="text-base text-left uppercase">{{ __('teacher') }}</th>
                            <th class="text-center uppercase"> {{ __('action') }}</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach ($lectivos as $l)
                            <tr class="text-base odd:bg-slate-100">
                                <td width="" class="text-left">
                                    {{ $l->level }}<br>{{ $l->course_name }}</td>

                                <td width="" class="text-left">
                                    {{ $l->grado_name }}<br>{{ __('section') . ' : ' . $l->letra }}</td>
                                <td width="" class="text-left">
                                    @if (strlen($l->teacher_name) == 0)
                                        <p>{{ __('no teacher') }}</p> @else{{ $l->teacher_name }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('gestion.assign_teacher_to_lectivo', $l->id) }}"
                                        class="text-green-600"
                                        title="{{ __('add teacher to course') . ' ' . $l->course_name . '  ' . $l->grado_name . '  ' . __('section') . ' ' . $l->letra }}">
                                        <i class="fa-solid icono fa-chalkboard-user"></i>
                                    </a>


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
