<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h5 class="mb-0">{{ __('Formulario de seccion') }}</h5>
                </div>
                <div class="card-body pt-4 p-3">
                    <form action="{{ route('seccion-update', ['id' => $sectionData['id'] ?? '']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="column">
                            <div class="form-group">
                                <label for="seccion-nombre_seccion"
                                    class="form-control-label">{{ __('Nombre de seccion') }}</label>
                                <div class="@error('nombre_seccion')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Nombre de seccion"
                                        name="nombre_seccion" value="{{ $sectionData['nombre_seccion'] ?? '' }}">
                                </div>
                                @error('nombre_seccion')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="seccion.id_facultad"
                                    class="form-control-label">{{ __('Facultad') }}</label>
                                <div class="@error('id_facultad')border border-danger rounded-3 @enderror">
                                    <select wire:model="id_facultad" wire:change="updateCareers" class="form-control"
                                        name="id_facultad" id="id_facultad">
                                        <option value="{{ $sectionData['id_facultad'] ?? '' }}">
                                            {{ isset($sectionData['nombre_facultad']) ? 'ORIGINAL - ' . $sectionData['nombre_facultad'] : '' }}
                                        </option>
                                        @foreach ($faculties as $faculty)
                                            <!-- Evita mostrar la opción duplicada para la facultad original -->
                                            @if (isset($sectionData['id_facultad']) && $faculty->id !== $sectionData['id_facultad'])
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
                                <label for="seccion.id_carrera" class="form-control-label">{{ __('Carrera') }}</label>
                                <div class="@error('id_carrera') border border-danger rounded-3 @enderror">
                                    <select wire:model="id_carrera" wire:change="updatePensums" class="form-control"
                                        name="id_carrera" id="id_carrera">
                                        <option value="{{ $sectionData['id_carrera'] ?? '' }}">
                                            {{ isset($sectionData['nombre_carrera']) ? 'ORIGINAL - ' . $sectionData['nombre_carrera'] : '' }}
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
                                <label for="seccion.id_pensum" class="form-control-label">{{ __('Pensum') }}</label>
                                <div class="@error('id_pensum') border border-danger rounded-3 @enderror">
                                    <select wire:model="id_pensum" wire:change="updateSemesters" class="form-control" name="id_pensum" id="id_pensum">
                                        <option value="{{ $sectionData['id_pensum'] ?? '' }}">
                                            {{ isset($sectionData['nombre_pensum']) ? 'ORIGINAL - ' . $sectionData['nombre_pensum'] : '' }}
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
                            <div class="form-group">
                                <label for="seccion.id_semestre" class="form-control-label">{{ __('Semestre') }}</label>
                                <div class="@error('id_semestre') border border-danger rounded-3 @enderror">
                                    <select class="form-control" name="id_semestre" id="id_semestre">
                                        <option value="{{ $sectionData['id_semestre'] ?? '' }}">
                                            {{ isset($sectionData['nombre_semestre']) ? 'ORIGINAL - ' . $sectionData['nombre_semestre'] : '' }}
                                        </option>
                                        @foreach ($semesters as $semester)
                                            <option value="{{ $semester->id }}">
                                                {{ $semester->nombre_semestre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_semestre')
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
