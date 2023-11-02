<div>
    <div class="container py-4">
        <div class="row justify-content-center"> <!-- Centralizar el contenido en la fila -->
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h5 class="mb-0">{{ __('Formulario de sección') }}</h5>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <form action="{{ route('seccion-store') }}" method="POST">
                            @csrf
                            <div class="column">
                                <div class="form-group">
                                    <label for="section-nombre_seccion"
                                        class="form-control-label">{{ __('Nombre de sección') }}</label>
                                    <div class="@error('section.nombre_seccion')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text" placeholder="Nombre de sección"
                                            id="nombre_seccion" name="nombre_seccion">
                                    </div>
                                    @error('nombre_seccion')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="section.id_faculty"
                                        class="form-control-label">{{ __('Facultad') }}</label>
                                    <div class="@error('section.id_faculty')border border-danger rounded-3 @enderror">
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
                                    <label for="section.id_career"
                                        class="form-control-label">{{ __('Carrera') }}</label>
                                    <div class="@error('section.id_career') border border-danger rounded-3 @enderror">
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
                                <div class="form-group">
                                    <label for="section.id_pensum"
                                        class="form-control-label">{{ __('Pensum') }}</label>
                                    <div class="@error('section.id_pensum') border border-danger rounded-3 @enderror">
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
                                <div class="form-group">
                                    <label for="section.id_semester"
                                        class="form-control-label">{{ __('Semestre') }}</label>
                                    <div class="@error('section.id_semester') border border-danger rounded-3 @enderror">
                                        <select class="form-control" name="id_semestre">
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
                            <div class="d-flex justify-content-end">
                                <button type="submit"
                                    class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'GUARDAR CAMBIOS' }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
