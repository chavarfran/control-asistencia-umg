<div class="container py-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h5 class="mb-0">{{ __('Formulario de asignación') }}</h5>
        </div>
        <div class="card-body pt-4 p-3">
            <form action="{{ route('asignatura-store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="assignment.id_profesor"
                                class="form-control-label">{{ __('Catedratico') }}</label>
                            <div class="@error('assignment.id_profesor')border border-danger rounded-3 @enderror">
                                <select class="form-control" name="id_catedratico">
                                    <option value="">Seleccione un catedratico</option>
                                    @foreach ($profesors as $profesor)
                                        <option value="{{ $profesor->id }}">
                                            {{ $profesor->primer_nombre }} {{ $profesor->segundo_nombre }}
                                            {{ $profesor->primer_apellido }} {{ $profesor->segundo_apellido }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('id_profesor')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="assignment.id_faculty" class="form-control-label">{{ __('Facultad') }}</label>
                            <div class="@error('assignment.id_faculty')border border-danger rounded-3 @enderror">
                                <select wire:model="id_faculty" class="form-control" name="id_facultad">
                                    <option value="">Seleccione una facultad</option>
                                    @foreach ($faculties as $faculty)
                                        <option value="{{ $faculty->id }}">
                                            {{ $faculty->nombre_facultad }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('id_faculty')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="assignment.id_career" class="form-control-label">{{ __('Carrera') }}</label>
                            <div class="@error('assignment.id_career') border border-danger rounded-3 @enderror">
                                <select wire:model="id_career" class="form-control" name="id_carrera">
                                    <option value="">Seleccione una carrera</option>
                                    @foreach ($careers as $career)
                                        <option value="{{ $career->id }}">{{ $career->nombre_carrera }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('id_career')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="assignment.id_curso" class="form-control-label">{{ __('Cursos') }}</label>
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow-none border mb-4">
                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-secondary opacity-7"></th>
                                                        <th class="text-uppercase text-dark text-xxs">
                                                            Curso
                                                        </th>
                                                        <th class="text-uppercase text-dark text-xxs ps-2">
                                                            Semestre, Ciclo Y Pensum</th>
                                                        <th class="text-uppercase text-dark text-xxs ps-2">
                                                            Sección</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($courses as $course)
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" name="selected_courses[]" value="{{ $course->id }}" id="{{ $course->id }}">

                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex px-2 py-1">
                                                                    <div
                                                                        class="d-flex flex-column justify-content-center">
                                                                        <h6 class="mb-0 text-ms">
                                                                            {{ $course->nombre_curso }}
                                                                        </h6>
                                                                        <p class="text-xs text-secondary mb-0">
                                                                            Día: {{ $course->dia }},
                                                                            Hora:
                                                                            {{ \Carbon\Carbon::createFromFormat('H:i:s', $course->horario)->format('H:i') }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    {{ $course->nombre_semestre }}</p>
                                                                <p class="text-xs text-secondary mb-0">
                                                                    Ciclo: {{ $course->ciclo }}, Pensum:
                                                                    {{ $course->nombre_pensum }}</p>
                                                            </td>
                                                            <td>
                                                                <p class="text-xs text-secondary mb-0">
                                                                    {{ $course->nombre_seccion }}</p>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit"
                        class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'GUARDAR CAMBIOS' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
