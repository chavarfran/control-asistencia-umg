<div>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nombre
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Curso
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Semestre y Ciclo</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
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
                                @foreach ($assignments as $assignment)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('storage/fotos/' . $assignment->foto) }}"
                                                        class="avatar avatar-sm me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-md">
                                                        {{ $assignment->primer_nombre }}
                                                        {{ $assignment->segundo_nombre }}
                                                        {{ $assignment->primer_apellido }}
                                                        {{ $assignment->segundo_apellido }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-md">{{ $assignment->nombre_curso }}
                                                    </h6>
                                                    <h6 class="mb-0 text-sm">{{ $assignment->nombre_carrera }}
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">Pensum
                                                        {{ $assignment->nombre_pensum }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $assignment->nombre_semestre }}
                                            </p>
                                            <p class="text-xs text-secondary mb-0">{{ $assignment->ciclo }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-secondary mb-0">{{ $assignment->nombre_seccion }}
                                            </p>
                                        </td>
                                        @switch($assignment->activo)
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
                                                <a class="btn bg-gradient-dark px-3 mb-0" href="javascript:;"><i
                                                        class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Editar</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table><div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-end  ">
                                <a href="{{ route('reporte-asignacion-gen') }}" class="btn bg-gradient-secondary btn-sm mb-0"
                                type="button">Reporte de asignacion general</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
