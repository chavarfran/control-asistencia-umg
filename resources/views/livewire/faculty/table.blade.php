<div>
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-1">Facultades</h6>
                <p class="text-sm">Lista de las facultades</p>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="../assets/img/facultad.jpg" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-xl">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <p class="text-gradient text-dark mb-2 text-sm">Facultad de</p>
                                <a href="javascript:;">
                                    <h5>
                                        Ingenieria en Sistemas
                                    </h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    Breve descripcion de la facultad y de las carreras que abarca.
                                </p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                        <div class="card card-blog card-plain">
                            <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="../assets/img/facultad.jpg" alt="img-blur-shadow"
                                        class="img-fluid shadow border-radius-xl">
                                </a>
                            </div>
                            <div class="card-body px-1 pb-0">
                                <p class="text-gradient text-dark mb-2 text-sm">Facultad de</p>
                                <a href="javascript:;">
                                    <h5>
                                        Ciencias Juridicas y Sociale
                                    </h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    Breve descripcion de la facultad y de las carreras que abarca.
                                </p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                        <div class="card h-100 card-plain border">
                            <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal-form">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class="text-secondary">Agregar nueva facultad</h5>
                                </a>
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
                                                <h3 class="font-weight-bolder text-info text-gradient">Agregar una nueva
                                                    facultad</h3>
                                                <p class="mb-0">Ingresar los campos requeridos</p>
                                            </div>
                                            <div class="card-body">
                                                <form role="form text-left">
                                                    <label>Nombre</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control"
                                                            placeholder="nombre de la facultad">
                                                    </div>
                                                    <label>Descripción</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="description" placeholder="Descripción de la facultad"></textarea>
                                                    </div>
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
            </div>
        </div>
    </div>
</div>
