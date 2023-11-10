<div>
    <div class="container py-4">
        <div class="row justify-content-center"> <!-- Centralizar el contenido en la fila -->
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h5 class="mb-0">{{ __('Formulario de carrera') }}</h5>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <form action="{{ route('career-store') }}" method="POST">
                            @csrf
                            <div class="column">
                                <div class="form-group">
                                    <label for="carrera-nombre_carrera"
                                        class="form-control-label">{{ __('Nombre de carrera') }}</label>
                                    <div
                                        class="@error('carrera.nombre_carrera')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text" placeholder="Nombre de carrera"
                                            id="nombre_carrera" name="nombre_carrera">
                                    </div>
                                    @error('nombre_carrera')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="carrera-descripcion"
                                        class="form-control-label">{{ __('Descripción') }}</label>
                                    <div class="@error('carrera.descripcion')border border-danger rounded-3 @enderror">
                                        <textarea class="form-control" name="descripcion" placeholder="Descripción de la carrera"></textarea>
                                    </div>
                                    @error('descripcion')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="carrera.id_facultad"
                                        class="form-control-label">{{ __('Facultad') }}</label>
                                    <div class="@error('carrera.id_facultad')border border-danger rounded-3 @enderror">
                                        <select class="form-control" name="id_facultad">
                                            <option value="">Seleccione una facultad</option>
                                            @foreach ($faculties as $faculty)
                                                <option value="{{ $faculty->id }}">
                                                    {{ $faculty->nombre_facultad }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('id_facultad')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url()->previous() }}" type="button" class="btn bg-gradient btn-md mt-4 mb-4"">Cancelar</a>
                                    <div class="mx-2"></div>
                                <button type="submit"
                                    class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'GUARDAR CAMBIOS' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
