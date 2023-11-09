<main class="main-content">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xl-9 mb-xl-0 mb-4">
                        <div class="card bg-transparent shadow-xl h-100">
                            <div class="overflow-hidden position-relative border-radius-xl h-100"
                                style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                                <span class="mask bg-gradient-dark"></span>
                                <div class="card-body position-relative z-index-1 p-3">
                                    <h3 class="text-white">
                                       {{ $assistance[0]->nombre_curso }}</h3>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                                <p class="text-white text-sm opacity-8 mb-2">{{ $assistance[0]->nombre_carrera }}</p>
                                                <h6 class="text-white text-sm opacity-8 mb-0">{{ $assistance[0]->nombre_semestre }}, Sección:
                                                    {{ $assistance[0]->nombre_seccion }}, Pensum: {{ $assistance[0]->nombre_pensum }}</h6>
                                                <h6 class="text-white mb-0">{{ $assistance[0]->nombre_facultad }}</h6>
                                            </div>
                                            <div>
                                                <p class="text-white text-sm opacity-8 mb-0">Inicia:
                                                <h6 class="text-white mb-0">{{ $assistance[0]->horario_inicio }}</h6>
                                                </p>

                                                <p class="text-white text-sm opacity-8 mb-0">Finaliza:
                                                <h6 class="text-white mb-0">{{ $assistance[0]->horario_final }}</h6>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-xl-0 mb-4">
                        <div class="card h-100">
                            <div class="overflow-hidden position-relative border-radius-xl h-100">
                                <div class="card-body position-relative text-center z-index-1 p-3">
                                    <a href="tu_enlace_destino.html" class="btn-icon">
                                        <div
                                            class="icon icon-shape icon-lg bg-gradient-secondary shadow text-center border-radius-lg">
                                            <i class="fa fa-clock text-ligth" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="card-body pt-0 p-3 text-center">
                                    <h6 class="text-center mb-0">Iniciar curso</h6>
                                    <span class="text-xs">Tiempo trascurrido</span>
                                    <hr class="horizontal dark my-3">
                                    <h5 class="mb-0">00:00</h5>
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
                                            <div <p class="text-dark text-sm opacity-8 mb-2">Ingenieria en sistemas de
                                                la informacion y ciencias plan fin de semana</p>
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
                <div class="card ">
                    <div class="card-header pb-0 p-3">
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
                                    <h6 class="mb-1 text-dark font-weight-bold text-sm">Febrero, 01, 2023</h6>
                                    <span class="text-xs">#RP-1</span>
                                </div>
                                <div class="d-flex align-items-center text-sm">
                                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i
                                            class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
