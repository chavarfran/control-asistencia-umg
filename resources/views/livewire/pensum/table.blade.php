<div class="row">
    <div class="col-md-12 mt-2">
        <div class="card">
           <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h6 class="mb-0">Listado de pensum</h6>
                    </div>
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal-form" 
                    class="btn bg-gradient-info btn-sm mb-0" type="button">+&nbsp; Agregar nuevo pensum</a>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Pensum: 2012</h6>
                            <span class="mb-2 text-xs">Facultad: <span class="text-dark font-weight-bold ms-2">Facultad
                                    de Ingenieria</span></span>
                            <span class="mb-2 text-xs">Carrera: <span class="text-dark ms-2 font-weight-bold">Ingenieria
                                    en Sistemas de la Información y Ciencia</span></span>
                            <span class="text-xs">Vigencia: <span
                                    class="text-dark ms-2 font-weight-bold">Inactivo</span></span>
                        </div>
                        <div class="ms-auto">
                            <a class="btn bg-gradient-danger px-3 mb-2" href="javascript:;"><i
                                    class="far fa-trash-alt me-2"></i>Eliminar</a>
                            <a class="btn bg-gradient-dark px-3 mb-2" href="javascript:;"><i
                                    class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Editar</a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Pensum: 2014</h6>
                            <span class="mb-2 text-xs">Facultad: <span class="text-dark font-weight-bold ms-2">Facultad
                                    de Ingenieria</span></span>
                            <span class="mb-2 text-xs">Carrera: <span class="text-dark ms-2 font-weight-bold">Ingenieria
                                    en Sistemas de la Información y Ciencia</span></span>
                            <span class="text-xs">Vigencia: <span
                                    class="text-dark ms-2 font-weight-bold">Activo</span></span>
                        </div>
                        <div class="ms-auto">
                            <a class="btn bg-gradient-danger px-3 mb-2" href="javascript:;"><i
                                    class="far fa-trash-alt me-2"></i>Eliminar</a>
                            <a class="btn bg-gradient-dark px-3 mb-2" href="javascript:;"><i
                                    class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Editar</a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Pensum: 2023</h6>
                            <span class="mb-2 text-xs">Facultad: <span class="text-dark font-weight-bold ms-2">Facultad
                                    de Ingenieria</span></span>
                            <span class="mb-2 text-xs">Carrera: <span class="text-dark ms-2 font-weight-bold">Ingenieria
                                    en Sistemas de la Información y Ciencia</span></span>
                            <span class="text-xs">Vigencia: <span
                                    class="text-dark ms-2 font-weight-bold">Activo</span></span>
                        </div>
                        <div class="ms-auto">
                            <a class="btn bg-gradient-danger px-3 mb-2" href="javascript:;"><i
                                    class="far fa-trash-alt me-2"></i>Eliminar</a>
                            <a class="btn bg-gradient-dark px-3 mb-2" href="javascript:;"><i
                                    class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Editar</a>
                        </div>
                    </li>
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Pensum: 2024</h6>
                            <span class="mb-2 text-xs">Facultad: <span class="text-dark font-weight-bold ms-2">Facultad
                                    de Ingenieria</span></span>
                            <span class="mb-2 text-xs">Carrera: <span class="text-dark ms-2 font-weight-bold">Ingenieria
                                    en Sistemas de la Información y Ciencia</span></span>
                            <span class="text-xs">Vigencia: <span
                                    class="text-dark ms-2 font-weight-bold">Activo</span></span>
                        </div>
                        <div class="ms-auto">
                            <a class="btn bg-gradient-danger px-3 mb-2" href="javascript:;"><i
                                    class="far fa-trash-alt me-2"></i>Eliminar</a>
                            <a class="btn bg-gradient-dark px-3 mb-2" href="javascript:;"><i
                                    class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Editar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="modal fade" id="modal-form" tabindex="-1" role="dialog"
            aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h3 class="font-weight-bolder text-info text-gradient">Agregar un nuevo
                                    pensum</h3>
                                <p class="mb-0">Ingresar los campos requeridos</p>
                            </div>
                            <div class="card-body">
                                <form role="form text-left">
                                    <label>Pensum</label>
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control"
                                                placeholder="Ingrese el año del pensum">
                                        </div>                                  
                                    <label>Facultad</label>
                                    <select class="form-control">
                                        <option>Seleccione una facultad</option>
                                      </select>
                                    <label>Carrera</label>
                                    <select class="form-control">
                                        <option>Seleccione la carrera</option>
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
