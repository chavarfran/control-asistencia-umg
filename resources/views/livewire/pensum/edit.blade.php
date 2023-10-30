<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h5 class="mb-0">{{ __('Formulario de pensum') }}</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('pensum-update', ['id' => $pensum->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="column">
                            <div class="form-group">
                                <label for="pensum-nombre_pensum"
                                    class="form-control-label">{{ __('Nombre de pensum') }}</label>
                                <div class="@error('nombre_pensum')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Nombre de pensum"
                                        name="nombre_pensum" value="{{ $pensum->nombre_pensum ?? '' }}">
                                </div>
                                @error('nombre_pensum')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pensum.id_facultad" class="form-control-label">{{ __('Facultad') }}</label>
                                <div class="@error('id_facultad')border border-danger rounded-3 @enderror">
                                    <select wire:model="id_facultad" class="form-control" name="id_facultad" id="id_facultad">
                                        <option value="{{ $pensum->id_facultad ?? '' }}">
                                            {{ $pensum ? 'ORIGINAL - ' . $pensum->nombre_facultad : '' }}
                                        </option>
                                        @foreach ($faculties as $faculty)
                                            <!-- Evita mostrar la opción duplicada para la facultad original -->
                                            @if ($pensum && $faculty->id !== $pensum->id_facultad)
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
                                <label for="pensum.id_carrera" class="form-control-label">{{ __('Carrera') }}</label>
                                <div class="@error('id_carrera') border border-danger rounded-3 @enderror">
                                    <select class="form-control" name="id_carrera" id="id_facultad">
                                        <option value="{{ $pensum->id_carrera ?? '' }}">
                                            {{ $pensum ? 'ORIGINAL - ' . $pensum->nombre_carrera : '' }}
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
                                class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'ACTUALIZAR CAMBIOS' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
