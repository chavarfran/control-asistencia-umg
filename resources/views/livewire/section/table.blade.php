<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="d-flex flex-row justify-content-between">
                    <div>
                        <h6 class="mb-0">Listado de sección</h6>
                    </div>
                    <a href="{{ route('formulario-seccion') }}" class="btn bg-gradient-info btn-sm mb-0"
                        type="button">+&nbsp; Agregar nueva seccion</a>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Facultad
                                    y Pensum
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
                            @foreach ($sections as $section)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $section->nombre_carrera }}
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">Pensum
                                                    {{ $section->nombre_pensum }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $section->nombre_semestre }}</p>
                                        <p class="text-xs text-secondary mb-0">{{ $section->ciclo }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{ $section->nombre_seccion }}</p>
                                    </td>
                                    @switch($section->activo)
                                        @case(1)
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-secondary">Activo</span>
                                            </td>
                                        @break

                                        @case(0)
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-dark">Inactivo</span>
                                            </td>
                                        @break

                                        @default
                                    @endswitch
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle">
                                        <div class="ms-auto">
                                            <a class="btn bg-gradient-danger px-3 mb-0" href="javascript:;"><i
                                                    class="far fa-trash-alt me-2"></i>Eliminar</a>
                                            <a class="btn bg-gradient-dark px-3 mb-0"
                                                href="{{ route('editar-seccion') }}?section_id={{ $section->id }}">
                                                <i class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Editar
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
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
</div>
