<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h5 class="mb-0">{{ __('Formulario de pensum') }}</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('pensum-store') }}" method="POST">
                        @csrf
                        <div class="column">
                            <div class="form-group">
                                <label for="pensums-nombre_pensum"
                                    class="form-control-label">{{ __('Nombre de pensum') }}</label>
                                <div class="@error('nombre_pensum')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Nombre de pensum"
                                        name="nombre_pensum" value="{{ $pensums->nombre_pensum ?? '' }}">
                                </div>
                                @error('nombre_pensum')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pensums.id_faculty" class="form-control-label">{{ __('Facultad') }}</label>
                                <div class="@error('id_facultad')border border-danger rounded-3 @enderror">
                                    <select wire:model="id_faculty" class="form-control" name="id_facultad">
                                        <option value="{{ $pensums->id_facultad ?? '' }}">
                                            {{ $pensums ? 'ORIGINAL - ' . $pensums->nombre_facultad : '' }}
                                        </option>
                                        @foreach ($faculties as $faculty)
                                            <!-- Evita mostrar la opción duplicada para la facultad original -->
                                            @if ($pensums && $faculty->id !== $pensums->id_facultad)
                                                <option value="{{ $faculty->id }}">
                                                    {{ $faculty->nombre_facultad }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_facultad')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pensums.id_career" class="form-control-label">{{ __('Carrera') }}</label>
                                <div class="@error('id_carrera') border border-danger rounded-3 @enderror">
                                    <select class="form-control" name="id_carrera">
                                        <option value="{{ $pensums->id_carrera ?? '' }}">
                                            {{ $pensums ? 'ORIGINAL - ' . $pensums->nombre_carrera : '' }}
                                        </option>
                                        @foreach ($careers as $career)
                                            <option value="{{ $career->id }}">
                                                {{ $career->nombre_carrera }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_carrera')
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
