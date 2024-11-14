<x-app-layout>
    <div class="w-full p-10 mx-auto my-1 bg-white rounded shadow-lg md:w-3/4">
        <div class="p-6 mx-auto my-0 bg-slate-100 rounded-xl">
            <h2 class="w-full text-[clamp(14px,1.1vw,44px)] font-semibold uppercase sm:w-full md:w-3/4">
                {{ __('create sede to school') }}</h2>

            <form action="{{ route('sedes.store') }}" method="POST" enctype="multipart/form-data">
                @include('config.sedes.partials.form')
            </form>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {

                var extensionesValidas = ".png, .gif, .jpeg, .jpg";
                var pesoPermitido = 2048;

                // Cuando cambie #fichero
                $("#fichero").change(function() {
                    $('#texto').text('');
                    $('#img').attr('src', '');

                    if (validarExtension(this)) {

                        if (validarPeso(this)) {
                            verImagen(this);
                        }
                    }
                });

                // Cuando cambie #fichero
                $("#fichero1").change(function() {
                    $('#texto1').text('');
                    $('#img1').attr('src', '');

                    if (validarExtension(this)) {

                        if (validarPeso(this)) {
                            verImagen1(this);
                        }
                    }
                });

                // Validacion de extensiones permitidas

                function validarExtension(datos) {

                    var ruta = datos.value;
                    var extension = ruta.substring(ruta.lastIndexOf('.') + 1).toLowerCase();
                    var extensionValida = extensionesValidas.indexOf(extension);

                    if (extensionValida < 0) {
                        $('#texto').text('La extensión no es válida Su fichero tiene de extensión: .' + extension);
                        return false;
                    } else {
                        return true;
                    }
                }

                // Validacion de peso del fichero en kbs

                function validarPeso(datos) {

                    if (datos.files && datos.files[0]) {

                        var pesoFichero = datos.files[0].size / 1024;

                        if (pesoFichero > pesoPermitido) {
                            $('#texto').text('El peso maximo permitido del fichero es: ' + pesoPermitido +
                                ' KBs Su fichero tiene: ' + pesoFichero + ' KBs');
                            return false;
                        } else {
                            return true;
                        }
                    }
                }

                // Vista preliminar de la imagen.
                function verImagen(datos) {
                    if (datos.files && datos.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#img').attr('src', e.target.result);
                        };
                        reader.readAsDataURL(datos.files[0]);
                    }
                }

                function verImagen1(datos) {
                    if (datos.files && datos.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#img1').attr('src', e.target.result);
                        };
                        reader.readAsDataURL(datos.files[0]);
                    }
                }
            });
        </script>
    @endpush

</x-app-layout>
