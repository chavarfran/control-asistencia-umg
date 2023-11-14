<div>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <div class="container py-2">
            <livewire:profesor.calendar />
            <div class="row my-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <h6>Horario de cursos</h6>
                            <p class="text-sm">
                                <i class="fa fa-clock text-success" aria-hidden="true"></i>
                                <span class="font-weight-bold">{{ $schedules[0]->nombre_carrera }}</span> Ciclo:
                                {{ $schedules[0]->ciclo }}
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <div class="timeline timeline-one-side">
                                @foreach ($schedules as $schedule)
                                    <div class="timeline-block mb-3">
                                        <span class="timeline-step">
                                            <i class="ni ni-bell-55 text-success text-gradient"></i>
                                        </span>
                                        <div class="timeline-content">
                                            <h6 class="text-dark text-sm font-weight-bold mb-0">
                                                {{ $schedule->nombre_curso }} -
                                                {{ $schedule->nombre_semestre }}</h6>
                                            <h6 class="text-dark text-sm font-weight-normal mb-0">Sección:
                                                {{ $schedule->nombre_seccion }}, Pensum: {{ $schedule->nombre_pensum }}
                                            </h6>
                                            <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                                                {{ $schedule->dia }}
                                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $schedule->horario_inicio)->format('H:i') }}
                                                a
                                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $schedule->horario_final)->format('H:i') }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 mb-md-0 mb-4 mt-4">
                    <div class="card h-100">
                        <div class="card-header pb-0">
                            <div class="row">
                                <div class="col-lg-6 col-7">
                                    <h6>formulario-tema</h6>
                                    <p class="text-sm mb-0">
                                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                                        @php
                                            setlocale(LC_TIME, 'es_ES.UTF-8');
                                            \Carbon\Carbon::setLocale('es');

                                            $fechaActual = \Carbon\Carbon::now();
                                            $fechaFormateada = strftime('%A %e de %B', $fechaActual->timestamp);
                                        @endphp

                                        <span class="font-weight-bold ms-1">{{ $fechaFormateada }}</span>

                                    </p>
                                </div>
                                <div class="col-lg-6 col-5 my-auto text-end">
                                    <div class="dropdown float-lg-end pe-4">
                                        <a class="btn bg-gradient-info px-3 mb-0"
                                            href="{{ route('formulario-tema') }}">Agregar un nuevo
                                            tema</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Curso y tema</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Fecha</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Estado</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($topics as $topic)
                                            <tr>
                                                <td class="align-middle text-sm">
                                                    <div class="accordion-item custom-align">
                                                        <h6 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button font-weight-bold collapsed"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapse-{{ $topic->id }}"
                                                                aria-expanded="false"
                                                                aria-controls="collapse-{{ $topic->id }}">
                                                                {{ $topic->nombre_curso }}
                                                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                                    aria-hidden="true"></i>
                                                            </button>
                                                        </h6>
                                                        <div id="collapse-{{ $topic->id }}"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionRental" style="">
                                                            <div class="accordion-body text-sm opacity-8">
                                                                {{ $topic->descripcion }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                @php
                                                    setlocale(LC_TIME, 'es_ES.UTF-8');
                                                    \Carbon\Carbon::setLocale('es');
                                                    $fecha_original = $topic->fecha; // Asegúrate de que $topic->fecha tenga el formato correcto
                                                    // Si $fecha_original ya está en formato 'Y-m-d', puedes omitir 'createFromFormat'
                                                    $fecha = \Carbon\Carbon::createFromFormat('Y-m-d', $fecha_original);
                                                    $fecha_format = $fecha->formatLocalized('%A: %d de %B %Y');
                                                @endphp
                                                <td class="align-middle text-sm">
                                                    <span class="text-xs font-weight-bold"> Fecha: {{ $fecha_format }}
                                                    </span>
                                                </td>
                                                <td class="align-middle text-sm text-center">
                                                    @switch($topic->activo)
                                                        @case(1)
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="badge badge-sm bg-gradient-secondary">Pendiente</span>
                                                        </td>
                                                    @break

                                                    @case(0)
                                                        <td class="align-middle text-center text-sm">
                                                            <span class="badge badge-sm bg-gradient-dark">Impartido</span>
                                                        </td>
                                                    @break

                                                    @default
                                                @endswitch
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</div>
