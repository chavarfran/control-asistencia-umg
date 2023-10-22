<div class="col">
    <div class="row">
        @foreach ($careers as $career)
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                            <i class="fas fa-landmark opacity-10"></i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                        <h6 class="text-center mb-0">{{ $career->nombre_carrera }}</h6>
                        <span class="text-xs">Facultad de {{ $career->nombre_facultad}}</span>
                        <hr class="horizontal dark my-3">
                        <h5 class="mb-0">Descripción</h5>
                        <span class="text-xs">{{ $career->descripcion }}</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center p-4">
                        <div class="ms-auto">
                            <a class="btn bg-gradient-danger px-3 mb-0" href="javascript:;"><i
                                    class="far fa-trash-alt me-2"></i>Eliminar</a>
                            <a class="btn bg-gradient-dark px-3 mb-0" href="javascript:;"><i
                                    class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-xl-2 col-md-4 mb-xl-0 mb-4">
            <div class="card h-100 card-plain border">
                <div class="card-body d-flex flex-column justify-content-center text-center">
                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#modal-form">
                        <i class="fa fa-plus text-secondary mb-3"></i>
                        <h5 class="text-secondary">Agregar nueva carrera</h5>
                    </a>
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
                                    <h3 class="font-weight-bolder text-info text-gradient">Agregar una nueva
                                        carrera</h3>
                                    <p class="mb-0">Ingresar los campos requeridos</p>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('career-store') }}" method="POST">
                                        @csrf
                                        <label>Nombre</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="nombre"
                                                placeholder="nombre de la carrera">
                                        </div>
                                        <label>Descripción</label>
                                        <div class="form-group">
                                            <textarea class="form-control" name="descripcion" placeholder="Descripción de la carrera"></textarea>
                                        </div>
                                        <label>Facultad</label>
                                        <select class="form-control" name="id_faculty">
                                            @foreach ($faculties as $facultie)
                                                <option value="{{ $facultie->id }}">{{ $facultie->nombre_facultad }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-center">
                                            <button type="submit"
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
