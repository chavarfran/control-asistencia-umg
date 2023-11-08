<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h5 class="mb-0">{{ __('Formulario de semestre') }}</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('semestre-update', ['id' => $semesterData['id'] ?? '']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="column">
                            <div class="form-group">
                                <label for="semestre-nombre_semestre"
                                    class="form-control-label">{{ __('Nombre de semestre') }}</label>
                                <div class="@error('nombre_semestre')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Nombre de semestre"
                                        name="nombre_semestre" value="{{ $semesterData['nombre_semestre'] ?? '' }}">
                                </div>
                                @error('nombre_semestre')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="semestre-ciclo"
                                    class="form-control-label">{{ __('Nombre de ciclo') }}</label>
                                <div class="@error('ciclo')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" placeholder="Año de ciclo en curso"
                                        name="ciclo" value="{{ $semesterData['ciclo'] ?? '' }}">
                                </div>
                                @error('ciclo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="semestre-descripcion"
                                    class="form-control-label">{{ __('Descripción') }}</label>
                                <div class="@error('semestre.descripcion')border border-danger rounded-3 @enderror">
                                    <textarea class="form-control" name="descripcion" placeholder="Descripción de la semestre">{{ $semesterData['descripcion'] ?? '' }}</textarea>
                                </div>
                                @error('descripcion')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="semestre.id_facultad"
                                    class="form-control-label">{{ __('Facultad') }}</label>
                                <div class="@error('id_facultad')border border-danger rounded-3 @enderror">
                                    <select wire:model="id_facultad" wire:change="updateCareers" class="form-control"
                                        name="id_facultad" id="id_facultad">
                                        <option value="{{ $semesterData['id_facultad'] ?? '' }}">
                                            {{ isset($semesterData['nombre_facultad']) ? 'ORIGINAL - ' . $semesterData['nombre_facultad'] : '' }}
                                        </option>
                                        @foreach ($faculties as $faculty)
                                            <!-- Evita mostrar la opción duplicada para la facultad original -->
                                            @if (isset($semesterData['id_facultad']) && $faculty->id !== $semesterData['id_facultad'])
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
                                <label for="semestre.id_carrera" class="form-control-label">{{ __('Carrera') }}</label>
                                <div class="@error('id_carrera') border border-danger rounded-3 @enderror">
                                    <select wire:model="id_carrera" wire:change="updatePensums" class="form-control"
                                        name="id_carrera" id="id_carrera">
                                        <option value="{{ $semesterData['id_carrera'] ?? '' }}">
                                            {{ isset($semesterData['nombre_carrera']) ? 'ORIGINAL - ' . $semesterData['nombre_carrera'] : '' }}
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
                            <div class="form-group">
                                <label for="semestre.id_pensum" class="form-control-label">{{ __('Pensum') }}</label>
                                <div class="@error('id_pensum') border border-danger rounded-3 @enderror">
                                    <select class="form-control" name="id_pensum" id="id_pensum">
                                        <option value="{{ $semesterData['id_pensum'] ?? '' }}">
                                            {{ isset($semesterData['nombre_pensum']) ? 'ORIGINAL - ' . $semesterData['nombre_pensum'] : '' }}
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
                        <div class="d-flex justify-content-end">
                            <a href="{{ url()->previous() }}" type="button" class="btn bg-gradient btn-md mt-4 mb-4"">Cancelar</a>
                                    <div class="mx-2"></div>
                            <button type="submit"
                                class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'ACTUALIZAR CAMBIOS' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
