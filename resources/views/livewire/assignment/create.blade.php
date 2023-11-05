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
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                        @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->nombre_curso }}, {{ $course->dia }}, {{ $course->horario }}
                        </option>
                    @endforeach
                    </select>
                  </div>
                <div class="d-flex justify-content-end">
                    <button type="submit"
                        class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'GUARDAR CAMBIOS' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
