@extends('layouts.layout-secondary')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bienvenidos</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <script src='https://meet.jit.si/external_api.js'></script>
            <script type="text/javascript">
                //const titulo = {!! $online->titulo !!};
                function codeAddress() {
                    const domain = 'meet.jit.si';
                    const options = {
                        roomName: 'NestorPazZamora',
                        width: 1080, //700
                        height: 620, //700
                        parentNode: document.querySelector('#meet'),
                        userInfo: {
                            email: 'admin@gmail.com',
                            displayName: 'Ingresa tu nombre'
                        },
                    };
                    const api = new JitsiMeetExternalAPI(domain, options);
                }
                window.onload = codeAddress;
            </script>

            <div class="row">
                <div class="col-12">
                    <div {{-- id="video" --}}>
                        <div id="meet" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        setTimeout(() => {
            capturarPantalla();
        }, 15000);

        function capturarPantalla() {
            $.ajax({
                url: "/llenarasistencia",
                cache: false,
                success: function() {}
            })
        }
        /* function tomarImagenPorSeccion(div, nombre) {
            html2canvas(document.querySelector("#" + div)).then(canvas => {
                var img = canvas.toDataURL();
                base = "img=" + img + "&nombre=" + nombre;
                $.ajax({
                    type: "POST",
                    url: "/crearImagenes.php",
                    data: base,
                    success: function(respuesta) {
                        respuesta = parseInt(respuesta);
                    }
                });
            });
        } */
    </script>
@endsection
