<div>
    <div class="container py-4">
        <div class="row justify-content-center"> <!-- Centralizar el contenido en la fila -->
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h5 class="mb-0">{{ __('Formulario de semestre') }}</h5>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <form action="#" method="POST">
                            @csrf
                            <div class="column">
                                <div class="form-group">
                                    <label for="semestre-nombre_semestre"
                                        class="form-control-label">{{ __('Nombre de semestre') }}</label>
                                    <div class="@error('pensu.nombre_semestre')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text" placeholder="Nombre de semestre"
                                            id="nombre_semestre" name="nombre_semestre">
                                    </div>
                                    @error('nombre_semestre')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="semestre-ciclo"
                                        class="form-control-label">{{ __('Nombre de ciclo') }}</label>
                                    <div class="@error('semestre.ciclo')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="number" placeholder="Año de ciclo en curso"
                                            id="ciclo" name="ciclo">
                                    </div>
                                    @error('ciclo')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="semestre-descripcion"
                                        class="form-control-label">{{ __('Descripción') }}</label>
                                    <div class="@error('semestre.descripcion')border border-danger rounded-3 @enderror">
                                        <textarea class="form-control" name="descripcion" placeholder="Descripción de la semestre"></textarea>
                                    </div>
                                    @error('descripcion')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="semestre.id_faculty"
                                        class="form-control-label">{{ __('Facultad') }}</label>
                                    <div class="@error('semestre.id_faculty')border border-danger rounded-3 @enderror">
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
                                    <label for="semestre.id_career"
                                        class="form-control-label">{{ __('Carrera') }}</label>
                                    <div class="@error('semestre.id_career') border border-danger rounded-3 @enderror">
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
                                    <label for="semestre.id_pensum"
                                        class="form-control-label">{{ __('Pensum') }}</label>
                                    <div class="@error('semestre.id_pensum') border border-danger rounded-3 @enderror">
                                        <select class="form-control" name="id_pensum">
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
