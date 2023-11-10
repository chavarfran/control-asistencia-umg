<div class="container py-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h5 class="mb-0">{{ __('Formulario de curso') }}</h5>
        </div>
        <div class="card-body pt-4 p-3">
            <form action="{{ route('curso-update', ['id' => $courseData['id'] ?? '']) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="course-nombre_curso"
                                class="form-control-label">{{ __('Nombre de curso') }}</label>
                            <div class="@error('course.nombre_curso')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="text" placeholder="Nombre de curso"
                                    id="nombre_curso" name="nombre_curso"
                                    value="{{ $courseData['nombre_curso'] ?? '' }}">
                            </div>
                            @error('nombre_curso')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course-descripcion" class="form-control-label">{{ __('Descripción') }}</label>
                    <div class="@error('course.descripcion')border border-danger rounded-3 @enderror">
                        <textarea class="form-control" name="descripcion" placeholder="Descripción de la carrera">{{ $courseData['descripcion'] ?? '' }}</textarea>
                    </div>
                    @error('descripcion')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="course.id_faculty" class="form-control-label">{{ __('Facultad') }}</label>
                    <div class="@error('course.id_faculty')border border-danger rounded-3 @enderror">
                        <select wire:model="id_facultad" wire:change="updateCareers" class="form-control"
                            name="id_facultad" id="id_facultad">
                            <option value="{{ $courseData['id_facultad'] ?? '' }}" selected="selected" hidden="hidden">
                                {{ isset($courseData['nombre_facultad']) ? 'ORIGINAL - ' . $courseData['nombre_facultad'] : '' }}
                            </option>
                            @foreach ($faculties as $faculty)
                                <!-- Evita mostrar la opción duplicada para la facultad original -->
                                @if (isset($courseData['id_facultad']) && $faculty->id !== $courseData['id_facultad'])
                                    <option value="{{ $faculty->id }}">
                                        {{ $faculty->nombre_facultad }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    @error('id_faculty')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="course.id_career" class="form-control-label">{{ __('Carrera') }}</label>
                            <div class="@error('course.id_career') border border-danger rounded-3 @enderror">
                                <select wire:model="id_carrera" wire:change="updatePensums" class="form-control"
                                    name="id_carrera" id="id_carrera">
                                    <option value="{{ $courseData['id_carrera'] ?? '' }}" selected="selected" hidden="hidden">
                                        {{ isset($courseData['nombre_carrera']) ? 'ORIGINAL - ' . $courseData['nombre_carrera'] : '' }}
                                    </option>
                                    @foreach ($careers as $career)
                                        <option value="{{ $career->id }}">
                                            {{ $career->nombre_carrera }}
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
                        <div class="form-group">
                            <label for="course.id_pensum" class="form-control-label">{{ __('Pensum') }}</label>
                            <div class="@error('course.id_pensum') border border-danger rounded-3 @enderror">
                                <select wire:model="id_pensum" wire:change="updateSemesters" class="form-control"
                                    name="id_pensum" id="id_pensum">
                                    <option value="{{ $courseData['id_pensum'] ?? '' }}" selected="selected" hidden="hidden">
                                        {{ isset($courseData['nombre_pensum']) ? 'ORIGINAL - ' . $courseData['nombre_pensum'] : '' }}
                                    </option>
                                    @foreach ($pensums as $pensum)
                                        <option value="{{ $pensum->id }}">
                                            {{ $pensum->nombre_pensum }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('id_pensum')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="course.id_semester" class="form-control-label">{{ __('Semestre') }}</label>
                            <div class="@error('course.id_semester') border border-danger rounded-3 @enderror">
                                <select  wire:model="id_semestre"  wire:change="updateSections" class="form-control" name="id_semestre" id="id_semestre">
                                    <option value="{{ $courseData['id_semestre'] ?? '' }}" selected="selected" hidden="hidden">
                                        {{ isset($courseData['nombre_semestre']) ? 'ORIGINAL - ' . $courseData['nombre_semestre'] : '' }}
                                    </option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{ $semester->id }}">
                                            {{ $semester->nombre_semestre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('id_semester')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="course.id_section" class="form-control-label">{{ __('Sección') }}</label>
                            <div class="@error('course.id_section') border border-danger rounded-3 @enderror">
                                <select class="form-control" name="id_seccion" id="id_seccion">
                                    <option value="{{ $courseData['id_seccion'] ?? '' }}" selected="selected" hidden="hidden">
                                        {{ isset($courseData['nombre_seccion']) ? 'ORIGINAL - ' . $courseData['nombre_seccion'] : '' }}
                                    </option>
                                    @foreach ($sections as $section)
                                        <option value="{{ $section->id }}">
                                            {{ $section->nombre_seccion }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('id_section')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="course-dia" class="form-control-label">{{ __('Dia') }}</label>
                            <div class="@error('course.dia')border border-danger rounded-3 @enderror">
                                <select class="form-control" id="dia" name="dia">
                                    <option value="{{ $courseData['dia'] ?? '' }}" selected="selected" hidden="hidden">
                                        {{ isset($courseData['dia']) ? 'ORIGINAL - ' . $courseData['dia'] : '' }}
                                    </option>
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miércoles">Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                    <option value="Sábado">Sábado</option>
                                    <option value="Domingo">Domingo</option>
                                </select>
                            </div>
                            @error('course.dia')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="course-horario_inicio" class="form-control-label">{{ __('Horario de inicio') }}</label>
                            <div class="@error('course.horario_inicio')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="time" id="horario_inicio" name="horario_inicio"value="{{ $courseData['horario_inicio'] ?? '' }}">
                            </div>
                            @error('course.horario_inicio')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="course-horario_final" class="form-control-label">{{ __('Horario de finalización') }}</label>
                            <div class="@error('course.horario_final')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="time" id="horario_final" name="horario_final"value="{{ $courseData['horario_final'] ?? '' }}">
                            </div>
                            @error('course.horario_final')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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
