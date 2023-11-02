<div class="row">
    <div class="col-md-12 mt-2">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h6 class="mb-0">Listado de pensum</h6>
                    </div>
                    <a href="{{ route('formulario-pensum') }}" class="btn bg-gradient-info btn-sm mb-0"
                        type="button">+&nbsp; Agregar nuevo pensum</a>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">
                    @foreach ($pensums as $pensum)
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">Pensum: {{ $pensum->nombre_pensum }}</h6>
                                <span class="mb-2 text-xs">Facultad: <span
                                        class="text-dark font-weight-bold ms-2">{{ $pensum->nombre_facultad }}</span></span>
                                <span class="mb-2 text-xs">Carrera: <span
                                        class="text-dark ms-2 font-weight-bold">{{ $pensum->nombre_carrera }}</span></span>
                                <span class="text-xs">Vigencia:
                                    @switch($pensum->activo)
                                        @case(0)
                                            <span class="text-dark ms-2 font-weight-bold">Inactivo</span>
                                        @break

                                        @case(1)
                                            <span class="text-dark ms-2 font-weight-bold">Activo</span>
                                        @break

                                        @default
                                    @endswitch
                                </span>
                            </div>
                            <div class="ms-auto">
                                @switch($pensum->activo)
                                    @case(0)
                                        @include('livewire.pensum.modal-habilitar')
                                    @break

                                    @case(1)
                                        @include('livewire.pensum.modal-inhabilitar')
                                        <a class="btn bg-gradient-dark px-3 mb-2"
                                            href="{{ route('editar-pensum') }}?pensum_id={{ $pensum->id }}">
                                            <i class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Editar
                                        </a>
                                    @break

                                    @default
                                @endswitch
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
