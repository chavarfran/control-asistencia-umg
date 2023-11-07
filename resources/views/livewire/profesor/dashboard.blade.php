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
                            <span class="font-weight-bold">Ingenieria en sistemas</span> Ciclo: 2023
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="timeline timeline-one-side">
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-bell-55 text-success text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Matematica Discreta - Segundo
                                        Semestre</h6>
                                    <h6 class="text-dark text-sm font-weight-normal mb-0">Sección: A, Pensum: 2022</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Sabado 7:00 AM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-bell-55 text-success text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Calculo Integral - Cuarto
                                        Semestre
                                    </h6>
                                    <h6 class="text-dark text-sm font-weight-normal mb-0">Sección: A, Pensum: 2014</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Sabado 9:00 AM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-bell-55 text-success text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Fisica II - Cuarto Semestre</h6>
                                    <h6 class="text-dark text-sm font-weight-normal mb-0">Sección: B, Pensum: 2014</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Sabado 11:00 AM</p>
                                </div>
                            </div>
                            <div class="timeline-block mb-3">
                                <span class="timeline-step">
                                    <i class="ni ni-bell-55 text-success text-gradient"></i>
                                </span>
                                <div class="timeline-content">
                                    <h6 class="text-dark text-sm font-weight-bold mb-0">Matematica Discreta - Segundo
                                        Semestre</h6>
                                    <h6 class="text-dark text-sm font-weight-normal mb-0">Sección: B, Pensum: 2022</h6>
                                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Sabado 14:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-6 mb-md-0 mb-4">
                <div class="card h-100">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Lista de temas</h6>
                                <p class="text-sm mb-0">
                                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                                    <span class="font-weight-bold ms-1">jueves 7</span> de noviembre
                                </p>
                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">
                                <div class="dropdown float-lg-end pe-4">
                                    <a class="btn bg-gradient-info px-3 mb-0" href="javascript:;">Agregar un nuevo
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
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
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
                                    <tr>
                                        <td class="align-middle text-sm">
                                            <div class="accordion-item custom-align">
                                                <h6 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button font-weight-bold collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                        Matematica Discreta, A
                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                </h6>
                                                <div id="collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionRental"
                                                    style="">
                                                    <div class="accordion-body text-sm opacity-8">
                                                        Algortimo de Prediccion del futuro cosmico parte 1
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <span class="text-xs font-weight-bold"> Fecha: Sabado: 21 de Octubre
                                                2023
                                            </span>
                                        </td>
                                        <td class="align-middle text-sm text-center">
                                            <span class="badge badge-sm bg-gradient-dark">Impartido</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-sm">
                                            <div class="accordion-item custom-align">
                                                <h6 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button font-weight-bold collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                        Calculo Integral, A
                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                </h6>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionRental"
                                                    style="">
                                                    <div class="accordion-body text-sm opacity-8">
                                                        Algortimo de Prediccion del futuro cosmico parte 1
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <span class="text-xs font-weight-bold"> Fecha: Sabado: 21 de Octubre
                                                2023
                                            </span>
                                        </td>
                                        <td class="align-middle text-sm text-center">
                                            <span class="badge badge-sm bg-gradient-secondary">Pendiente</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-sm">
                                            <div class="accordion-item custom-align">
                                                <h6 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button font-weight-bold collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                        Fisica II, A
                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                </h6>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionRental"
                                                    style="">
                                                    <div class="accordion-body text-sm opacity-8">
                                                        Algortimo de Prediccion del futuro cosmico parte 1
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <span class="text-xs font-weight-bold"> Fecha: Sabado: 21 de Octubre
                                                2023
                                            </span>
                                        </td>
                                        <td class="align-middle text-sm text-center">
                                            <span class="badge badge-sm bg-gradient-secondary">Pendiente</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle text-sm">
                                            <div class="accordion-item custom-align">
                                                <h6 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button font-weight-bold collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseFour" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                        Matematica Discreta, B
                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"
                                                            aria-hidden="true"></i>
                                                    </button>
                                                </h6>
                                                <div id="collapseFour" class="accordion-collapse collapse"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionRental"
                                                    style="">
                                                    <div class="accordion-body text-sm opacity-8">
                                                        Algortimo de Prediccion del futuro cosmico parte 1
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <span class="text-xs font-weight-bold"> Fecha: Sabado: 21 de Octubre
                                                2023
                                            </span>
                                        </td>
                                        <td class="align-middle text-sm text-center">
                                            <span class="badge badge-sm bg-gradient-secondary">Impartido</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
