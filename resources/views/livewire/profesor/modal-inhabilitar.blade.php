<a class="btn bg-gradient-danger px-3 mb-0" data-bs-toggle="modal"
    data-bs-target="#modal-trash-profesor-{{ $profesor->id }}"><i class="far fa-trash-alt me-2"></i>Eliminar</a>
<div class="modal fade" id="modal-trash-profesor-{{ $profesor->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-trash-profesor-tittle">Inhabilitar
                    catedratico  {{ $profesor->primer_nombre }}
                    {{ $profesor->segundo_nombre }}
                    {{ $profesor->primer_apellido }}
                    {{ $profesor->segundo_apellido }}</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro de querer inhabilitar al catedratco
                    {{ $profesor->primer_nombre }}
                    {{ $profesor->segundo_nombre }}
                    {{ $profesor->primer_apellido }}
                    {{ $profesor->segundo_apellido }}?</p>
            </div>
            <form action="{{ route('seccion-inhabilitar', $profesor->id) }}" method="POST">
                @csrf
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-danger">Inhabilitar</button>
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
