<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h6 class="mb-0">Listado de catedraticos</h6>
                    </div>
                    <a href="{{ route('formulario-asignatura') }}" class="btn bg-gradient-info btn-sm mb-0"
                        type="button">+&nbsp; Asignar curso</a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Curso
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Facultad
                                    y Carrera
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Semestre y Ciclo</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Sección</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Estado</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Creado</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-md">Pedro Ricardo Perez Cardona
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-md">Precálculo
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Ingenieria en Sistemas de la Información y Ciencia
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">Pensum 2014</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Tercer Semestre</p>
                                    <p class="text-xs text-secondary mb-0">2023</p>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0">A</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-secondary">Activo</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                </td>
                                <td class="align-middle">
                                    <div class="ms-auto">
                                        <a class="btn bg-gradient-danger px-3 mb-0" href="javascript:;"><i
                                                class="far fa-trash-alt me-2"></i>Eliminar</a>
                                        <a class="btn bg-gradient-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Editar</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-md">Maria Alejandra Megia Lopez
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-md">Algebra Lineal
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Ingenieria en Sistemas de la Información y Ciencia
                                            </h6>
                                            <p class="text-xs text-secondary mb-0">Pensum 2014</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">Segundo Semestre</p>
                                    <p class="text-xs text-secondary mb-0">2022</p>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0">B</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-secondary">Activo</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                </td>
                                <td class="align-middle">
                                    <div class="ms-auto">
                                        <a class="btn bg-gradient-danger px-3 mb-0" href="javascript:;"><i
                                                class="far fa-trash-alt me-2"></i>Eliminar</a>
                                        <a class="btn bg-gradient-dark px-3 mb-0" href="javascript:;"><i
                                                class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Editar</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-dark justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:;" tabindex="-1">
                                    <i class="fa fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:;">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:;">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:;">
                                    <i class="fa fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h3 class="font-weight-bolder text-info text-gradient">Asignación de curso</h3>
                                <p class="mb-0">Ingresar los campos requeridos</p>
                            </div>
                            <div class="card-body">
                                <form role="form text-left">
                                    <label>Catedratico</label>
                                    <select class="form-control">
                                        <option>Seleccione el catedratico</option>
                                    </select>
                                    <label>Curso</label>
                                    <select class="form-control">
                                        <option>Seleccione el catedratico</option>
                                    </select>
                                    <label>Carrera</label>
                                    <select class="form-control">
                                        <option>Seleccione la carrera</option>
                                    </select>
                                    <label>Pensum</label>
                                    <select class="form-control">
                                        <option>Seleccione el pensum</option>
                                    </select>
                                    <label>Semestre</label>
                                    <select class="form-control">
                                        <option>Seleccione el semestre</option>
                                        </selec t>
                                        <label>Ciclo</label>
                                        <select class="form-control">
                                            <option>Seleccione el ciclo</option>
                                        </select>
                                        <label>Seccion</label>
                                        <select class="form-control">
                                            <option>Seleccione la sección</option>
                                        </select>
                                        <div class="text-center">
                                            <button type="button"
                                                class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">Guardar</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
