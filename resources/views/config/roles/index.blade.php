<x-app-layout>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">

    <x-slot name="header">
        <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
            {{ __('role adminitration panel') }}</h2>
    </x-slot>

    <div class="w-[550px] mx-auto mt-10">
        <div class="w-full mx-auto text-center card">
            <div class="text-white card-header bg-primary">
                <div class="flex items-center justify-between card-title">
                    <h4 class="text-white">
                        {{ __('list of roles') }}
                    </h4>

                    <a href="{{ route('roles.create') }}" class="text-white cursor-pointer" title="{{ __('add role') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table id="role" class="table table-striped text-[clamp(14px,1.1vw,18px)]" style="width:100%;">
                    <thead>
                        <tr>
                            <th>{{ _('id') }}</th>
                            <th>{{ __('role name') }}</th>
                            <th>{{ __('actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td width="20%">{{ $role->id }}</td>
                                <td width="40%">{{ $role->name }}</td>
                                <td width=""
                                    class="grid items-center justify-around w-full grid-cols-1 gap-2 mx-auto text-center md:grid-cols-3">
                                    <a href="{{ route('roles.show', $role->id) }}" class="text-green-600">
                                        <i class="text-center text-blue-500 fa-solid fa-eye icono"></i>

                                    </a>
                                    <a href="{{ route('roles.edit', $role->id) }}" class="">
                                        <i class="text-center text-green-500 fa-solid fa-pencil icono"></i> </a>

                                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                        class="text-red-600 form-delete">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <i class="text-center text-red-500 fa-solid fa-trash icono"></i>

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
                $('#role').DataTable({

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
