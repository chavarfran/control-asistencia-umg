<div class="container py-4">
    <div class="card">
        <div class="card-header pb-0 px-3">
            <h5 class="mb-0">{{ __('Formulario de curso') }}</h5>
        </div>
        <div class="card-body pt-4 p-3">
            <form action="{{ route('curso-store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="course-nombre_curso"
                                class="form-control-label">{{ __('Nombre de curso') }}</label>
                            <div class="@error('course.nombre_curso')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="text" placeholder="Nombre de curso"
                                    id="nombre_curso" name="nombre_curso">
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
                        <textarea class="form-control" name="descripcion" placeholder="Descripción de la carrera"></textarea>
                    </div>
                    @error('descripcion')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="course.id_faculty" class="form-control-label">{{ __('Facultad') }}</label>
                    <div class="@error('course.id_faculty')border border-danger rounded-3 @enderror">
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="course.id_career" class="form-control-label">{{ __('Carrera') }}</label>
                            <div class="@error('course.id_career') border border-danger rounded-3 @enderror">
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
                        <div class="form-group">
                            <label for="course.id_pensum" class="form-control-label">{{ __('Pensum') }}</label>
                            <div class="@error('course.id_pensum') border border-danger rounded-3 @enderror">
                                <select wire:model="id_pensum" class="form-control" name="id_pensum">
                                    <option value="">Seleccione un pensum</option>
                                    @foreach ($pensums as $pensum)
                                        <option value="{{ $pensum->id }}">{{ $pensum->nombre_pensum }}
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
                                <select wire:model="id_semester" class="form-control" name="id_semestre">
                                    <option value="">Seleccione un semestre</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{ $semester->id }}">{{ $semester->nombre_semestre }}
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
                                <select class="form-control" name="id_seccion">
                                    <option value="">Seleccione una sección</option>
                                    @foreach ($sections as $section)
                                        <option value="{{ $section->id }}">{{ $section->nombre_seccion }}
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
                                    <option selected="selected" hidden="hidden">Seleccione un día</option>
                                    <option value="Lunes">Lunes</option>
                                    <option value="Martes">Martes</option>
                                    <option value="Miércoles">Miércoles</option>
                                    <option value="Jueves">Jueves</option>
                                    <option value="Viernes">Viernes</option>
                                    <option value="Sabado">Sábado</option>
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
                                <input class="form-control" type="time" id="horario_inicio" name="horario_inicio">
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
                                <input class="form-control" type="time" id="horario_final" name="horario_final">
                            </div>
                            @error('course.horario_final')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ url()->previous() }}" type="button" class="btn bg-gradient btn-md mt-4 mb-4"">Cancelar</a>
                                    <div class="mx-2"></div>
                    <button type="submit"
                        class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'GUARDAR CAMBIOS' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
