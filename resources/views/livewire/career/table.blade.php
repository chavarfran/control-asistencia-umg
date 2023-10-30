<div class="col">
    <div class="row">
        @foreach ($careers as $career)
            <div class="col-md-3 py-2">
                <div class="card h-100">
                    <div class="card-header mx-4 p-3 text-center">
                        <div class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                            <i class="fas fa-landmark opacity-10"></i>
                        </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                        <h6 class="text-center mb-0">{{ $career->nombre_carrera }}</h6>
                        <span class="text-xs">Facultad de {{ $career->nombre_facultad }}</span>
                        <hr class="horizontal dark my-3">
                        <h5 class="mb-0">Descripción</h5>
                        <span class="text-xs">{{ $career->descripcion }}</span>
                    </div>
                    <div class="py-3 justify-content-center align-items-center text-center">
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
        <div class="col-xl-3 col-md-4 mb-xl-0 mb-4 py-2">
            <div class="card h-100 card-plain border">
                <div class="card-body d-flex flex-column justify-content-center text-center">
                    <a href="{{ route('formulario-carrera') }}">
                        <i class="fa fa-plus text-secondary mb-3"></i>
                        <h5 class="text-secondary">Agregar nueva carrera</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
