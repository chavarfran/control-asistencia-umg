<a class="btn bg-gradient-secondary px-3 mb-0" data-bs-toggle="modal"
    data-bs-target="#modal-restore-section-{{ $section->id }}"><i class="fas fa-undo"></i> Activar</a>
<div class="modal fade" id="modal-restore-section-{{ $section->id }}" tabindex="-1" role="dialog"
    aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-restore-section-tittle">Habilitar
                    sección {{ $section->nombre_seccion }}</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro de querer habilitar el sección
                    {{ $section->nombre_seccion }} para la carrera de
                    {{ $section->nombre_carrera }}?</p>
            </div>
            <form action="{{ route('seccion-habilitar', $section->id) }}" method="POST">
                @csrf
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-secondary">habilitar</button>
                    <button type="button" class="btn btn-link text-dark ml-auto" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
