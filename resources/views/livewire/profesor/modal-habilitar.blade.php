<a class="btn bg-gradient-secondary px-3 mb-0" data-bs-toggle="modal"
    data-bs-target="#modal-restore-profesor-{{ $profesor->id }}"><i class="fas fa-undo"></i> Activar</a>
<div class="modal fade" id="modal-restore-profesor-{{ $profesor->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-restore-profesor-tittle">Habilitar
                    catedratico {{ $profesor->primer_nombre }}
                    {{ $profesor->segundo_nombre }}
                    {{ $profesor->primer_apellido }}
                    {{ $profesor->segundo_apellido }}</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro de querer habilitar al catedratco
                    {{ $profesor->primer_nombre }}
                    {{ $profesor->segundo_nombre }}
                    {{ $profesor->primer_apellido }}
                    {{ $profesor->segundo_apellido }}}?</p>
            </div>
            <form action="{{ route('catedratico-habilitar', $profesor->id) }}" method="POST">
                @csrf
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-secondary">habilitar</button>
                    <button type="button" class="btn btn-link text-dark ml-auto"
                        data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
