<div>
    <main class="main-content">
        <div class="container py-4">
            <form action="{{ route('asistencia-store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-xl-9 mb-xl-0 mb-4">
                                <div class="card bg-transparent shadow-xl h-100">
                                    <div class="overflow-hidden position-relative border-radius-xl h-100"
                                        style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                                        <span class="mask bg-gradient-dark"></span>
                                        @if (isset($assignment[0]))
                                            <div class="card-body position-relative z-index-1 p-3">
                                                <input type="hidden" id="id_catedratico" name="id_catedratico"
                                                    value=" {{ $assignment[0]->id_catedratico }}">
                                                <input type="hidden" id="id_curso" name="id_curso"
                                                    value=" {{ $assignment[0]->id_curso }}">
                                                <input type="hidden" id="hora_salida" name="hora_salida"
                                                    value=" {{ $assignment[0]->horario_final }}">
                                                <input type="hidden" id="latitude" name="latitude">
                                                <input type="hidden" id="longitude" name="longitude">
                                                <script>
                                                    function getLocation() {
                                                        if (navigator.geolocation) {
                                                            navigator.geolocation.getCurrentPosition(showPosition, showError);
                                                        } else {
                                                            alert("Geolocation is not supported by this browser.");
                                                        }
                                                    }

                                                    function showPosition(position) {
                                                        document.getElementById('latitude').value = position.coords.latitude;
                                                        document.getElementById('longitude').value = position.coords.longitude;
                                                    }

                                                    function showError(error) {
                                                        switch (error.code) {
                                                            case error.PERMISSION_DENIED:
                                                                alert("User denied the request for Geolocation.");
                                                                break;
                                                            case error.POSITION_UNAVAILABLE:
                                                                alert("Location information is unavailable.");
                                                                break;
                                                            case error.TIMEOUT:
                                                                alert("The request to get user location timed out.");
                                                                break;
                                                            case error.UNKNOWN_ERROR:
                                                                alert("An unknown error occurred.");
                                                                break;
                                                        }
                                                    }
                                                    window.onload = getLocation;
                                                </script>
                                                <h3 class="text-white">
                                                    {{ $assignment[0]->nombre_curso }}</h3>
                                                <div class="d-flex">
                                                    <div class="d-flex">
                                                        <div class="me-4">
                                                            <p class="text-white text-sm opacity-8 mb-2">
                                                                {{ $assignment[0]->nombre_carrera }}</p>
                                                            <h6 class="text-white text-sm opacity-8 mb-0">
                                                                {{ $assignment[0]->nombre_semestre }}, Sección:
                                                                {{ $assignment[0]->nombre_seccion }}, Pensum:
                                                                {{ $assignment[0]->nombre_pensum }}</h6>
                                                            <h6 class="text-white mb-0">
                                                                {{ $assignment[0]->nombre_facultad }}
                                                            </h6>
                                                        </div>
                                                        <div>
                                                            <p class="text-white text-sm opacity-8 mb-0">Inicia:
                                                            <h6 class="text-white mb-0">
                                                                {{ $assignment[0]->horario_inicio }}
                                                            </h6>
                                                            </p>
                                                            <p class="text-white text-sm opacity-8 mb-0">Finaliza:
                                                            <h6 class="text-white mb-0">
                                                                {{ $assignment[0]->horario_final }}
                                                            </h6>
                                                            </p>
                                                        </div>
                                                        <script>
                                                            var horarioInicio = "{{ $assignment[0]->horario_inicio }}";
                                                            var horarioFinal = "{{ $assignment[0]->horario_final }}";
                                                            // Aquí asumimos que $assignment[0]->horario_inicio y $assignment[0]->horario_final
                                                            // están en formato 'H:i:s' (ejemplo: '08:00:00')
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="card-body position-relative z-index-1 p-3">
                                                <h3 class="text-white">
                                                    SIN CURSOS POR INICIAR</h3>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 mb-xl-0 mb-4">
                                <div class="card h-100">
                                    <div class="overflow-hidden position-relative border-radius-xl h-100">
                                        <div class="card-body position-relative text-center z-index-1 p-3">
                                            <button type="submit" onclick="getLocation();" class="btn"
                                                {{ $assistance ? 'disabled' : '' }}>
                                                <div
                                                    class="icon icon-shape icon-lg bg-gradient-secondary shadow text-center border-radius-lg">
                                                    <i class="fa fa-clock text-ligth" aria-hidden="true"></i>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="card-body pt-0 p-3 text-center">
                                            <h6 class="text-center mb-0">Iniciar curso</h6>
                                            <span class="text-xs">Tiempo trascurrido</span>
                                            <hr class="horizontal dark my-3">
                                            <h5 id="cronometro" class="mb-0">00:00:00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 mb-lg-0 mb-4 w-100">
                                <div class="card mt-3 h-100">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-md-12 mb-md-0 mb-4">
                                                <div class="form-group">
                                                    <h6 class="text-dark mb-0">Descripcion de tema</h6>
                                                    <input type="hidden" id="id_tema" name="id_tema"
                                                        value="{{ $topic[0]->id_tema ?? '' }}">
                                                    <div <p class="text-dark text-sm opacity-8 mb-2">
                                                        {{ $topic[0]->descripcion ?? '' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 h-100">
                        <div class="card">
                            <div class="card-header pb-0 p-3 ">
                                <div class="row">
                                    <div class="col-md-6 d-flex align-items-center">
                                        <h6 class="mb-0">Asistencias</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-3 pb-0">
                                <ul class="list-group">
                                    <li
                                        class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                        <div class="d-flex flex-column">
                                            @php
                                                setlocale(LC_TIME, 'es_ES.UTF-8');
                                                \Carbon\Carbon::setLocale('es');

                                                $fechaActual = \Carbon\Carbon::now();
                                                $fechaFormateada = strftime('%A %e de %B', $fechaActual->timestamp);
                                            @endphp
                                            <h6 class="mb-1 text-dark font-weight-bold text-sm">{{ $fechaFormateada }}
                                            </h6>
                                            <span class="text-xs">REPORTE</span>
                                        </div>
                                        <div class="d-flex align-items-center text-sm">
                                            <button
                                                href="{{ route('reporte-catedratico-id') }}?profesor_id={{ $assignment[0]->id_catedratico }}"
                                                class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                                    class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script>
        function actualizarContador() {
            var ahora = new Date();
            var inicioCurso = new Date(ahora.toDateString() + ' ' + horarioInicio);
            var finCurso = new Date(ahora.toDateString() + ' ' + horarioFinal);

            var diferencia = ahora - inicioCurso;
            var contador = document.getElementById('cronometro');

            if (ahora >= inicioCurso && ahora <= finCurso) {
                // Curso en progreso
                var horas = Math.floor(diferencia / (1000 * 60 * 60));
                var minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
                var segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

                contador.innerHTML =
                    `${horas.toString().padStart(2, '0')}:${minutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;
            } else if (ahora > finCurso) {
                contador.innerHTML = "Curso finalizado";
            } else {
                contador.innerHTML = "Curso no iniciado";
            }
        }
        setInterval(actualizarContador, 1000);
        actualizarContador();
    </script>
</div>
