<div>
    <div class="container py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">{{ __('Formulario de catedratico') }}</h5>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('catedratico-update', ['id' => $profesorData['id'] ?? '']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="profesor-foto"
                                    class="form-control-label">{{ __('Fotografia del catedratico') }}</label>
                                <div class="@error('profesor.foto')border border-danger rounded-3 @enderror">
                                    @if (isset($profesorData['foto']))
                                        <input type="hidden" name="foto" value="{{ $profesorData['foto'] }}">
                                        <input class="form-control" type="file"
                                            placeholder="Agregue una fotografía del catedrático" id="foto_edit"
                                            name="foto_edit">
                                    @else
                                        <input class="form-control" type="file"
                                            placeholder="Agregue una fotografía del catedrático" id="foto"
                                            name="foto">
                                    @endif
                                </div>
                                @error('profesor.foto')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="profesor-codigo_catedratico"
                                    class="form-control-label">{{ __('Número de carné') }}</label>
                                <div
                                    class="@error('profesor.codigo_catedratico')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text"
                                        placeholder="Primer nombre del catedratico" id="codigo_catedratico"
                                        name="codigo_catedratico"
                                        value="{{ $profesorData['codigo_catedratico'] ?? '' }}">
                                </div>
                                @error('profesor.codigo_catedratico')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profesor-primer_nombre"
                                        class="form-control-label">{{ __('Primer nombre') }}</label>
                                    <div
                                        class="@error('profesor.primer_nombre')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text"
                                            placeholder="Primer nombre del catedratico" id="primer_nombre"
                                            name="primer_nombre" value="{{ $profesorData['primer_nombre'] ?? '' }}">
                                    </div>
                                    @error('profesor.primer_nombre')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profesor-segundo_nombre"
                                        class="form-control-label">{{ __('Segundo nombre') }}</label>
                                    <div
                                        class="@error('profesor.segundo_nombre')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text"
                                            placeholder="Segundo nombre del catedratico" id="segundo_nombre"
                                            name="segundo_nombre" value="{{ $profesorData['segundo_nombre'] ?? '' }}">
                                    </div>
                                    @error('profesor.segundo_nombre')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profesor-primer_apellido"
                                        class="form-control-label">{{ __('Primer apellido') }}</label>
                                    <div
                                        class="@error('profesor.primer_apellido')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text"
                                            placeholder="Primer apellido del catedratico" id="primer_apellido"
                                            name="primer_apellido"
                                            value="{{ $profesorData['primer_apellido'] ?? '' }}">
                                    </div>
                                    @error('profesor.primer_apellido')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profesor-segundo_apellido"
                                        class="form-control-label">{{ __('Segundo Apellido') }}</label>
                                    <div
                                        class="@error('profesor.segundo_apellido')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text"
                                            placeholder="Segundo Apellido del catedratico" id="segundo_apellido"
                                            name="segundo_apellido"
                                            value="{{ $profesorData['segundo_apellido'] ?? '' }}">
                                    </div>
                                    @error('profesor.segundo_apellido')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="profesor-dpi" class="form-control-label">{{ __('DPI') }}</label>
                                    <div class="@error('profesor.dpi')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text" placeholder="0000 00000 0000"
                                            id="dpi" name="dpi" value="{{ $profesorData['dpi'] ?? '' }}">
                                    </div>
                                    @error('profesor.dpi')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="profesor-email"
                                        class="form-control-label">{{ __('Correo electrónico') }}</label>
                                    <div class="@error('profesor.email')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="email" placeholder="@example.com"
                                            id="email" name="email"
                                            value="{{ $profesorData['email'] ?? '' }}">
                                    </div>
                                    @error('profesor.email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="profesor-telefono"
                                        class="form-control-label">{{ __('Teléfono') }}</label>
                                    <div class="@error('profesor.telefono')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="tel" placeholder="(+502) 0000-0000"
                                            id="telefono" name="telefono"
                                            value="{{ $profesorData['telefono'] ?? '' }}">
                                    </div>
                                    @error('profesor.telefono')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="profesor-direccion"
                                        class="form-control-label">{{ __('Dirección') }}</label>
                                    <div class="@error('profesor.direccion')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="text"
                                            placeholder="Ingrese una dirección de residencia" id="direccion"
                                            name="direccion" value="{{ $profesorData['direccion'] ?? '' }}">
                                    </div>
                                    @error('profesor.direccion')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="profesor.id_departamento"
                                        class="form-control-label">{{ __('Departamento') }}</label>
                                    <div
                                        class="@error('profesor.id_departamento') border border-danger rounded-3 @enderror">
                                        <select wire:model="id_departament" wire:change="updatedIdDepartament"
                                            class="form-control" id="id_departamento" name="id_departamento">
                                            <option value="{{ $profesorData['id_departamento'] ?? '' }}"
                                                selected="selected" hidden="hidden">
                                                {{ isset($profesorData['nombre_departamento']) ? 'ORIGINAL - ' . $profesorData['nombre_departamento'] : '' }}
                                            </option>
                                            @foreach ($departaments as $departament)
                                                <option value="{{ $departament->id }}">
                                                    {{ $departament->nombre_departamento }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('id_departamento')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="profesor.id_municipio"
                                        class="form-control-label">{{ __('Municipio') }}</label>
                                    <div
                                        class="@error('profesor.id_municipio') border border-danger rounded-3 @enderror">
                                        <select class="form-control" id="id_municipio" name="id_municipio">
                                            <option value="{{ $profesorData['id_municipio'] ?? '' }}"
                                                selected="selected" hidden="hidden">
                                                {{ isset($profesorData['nombre_municipio']) ? 'ORIGINAL - ' . $profesorData['nombre_municipio'] : '' }}
                                            </option>
                                            @foreach ($municipios as $municipio)
                                                <option value="{{ $municipio->id }}">
                                                    {{ $municipio->nombre_municipio }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('id_municipio')
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const codigoCatedraticoInput = document.getElementById("codigo_catedratico");

            codigoCatedraticoInput.addEventListener('input', function() {
                let value = this.value.replace(/\D/g, ''); // Remover todo lo que no sea un dígito.

                // Aplicar formato.
                if (value.length > 4) {
                    value = value.substring(0, 4) + " " + value.substring(4);
                }
                if (value.length > 7) {
                    value = value.substring(0, 7) + " " + value.substring(7);
                }

                this.value = value.substring(0, 14); // Solo tomar los primeros 14 caracteres.
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const codigoCatedraticoInput = document.getElementById("dpi");

            codigoCatedraticoInput.addEventListener('input', function() {
                let value = this.value.replace(/\D/g, ''); // Remover todo lo que no sea un dígito.

                // Aplicar formato.
                if (value.length > 4) {
                    value = value.substring(0, 4) + " " + value.substring(4);
                }
                if (value.length > 10) {
                    value = value.substring(0, 10) + " " + value.substring(10);
                }

                this.value = value.substring(0,
                    15
                ); // Solo tomar los primeros 16 caracteres, en caso de que el usuario pegue algo más largo.
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const codigoTelefonoInput = document.getElementById("telefono");

            // Verificar si el input tiene un valor previo.
            if (!codigoTelefonoInput.value || codigoTelefonoInput.value.trim() === '') {
                // Establecer el valor inicial.
                codigoTelefonoInput.value = '(+502) ';
            }

            codigoTelefonoInput.addEventListener('input', function() {
                // Extraer sólo la parte numérica después de (+502)
                let numericValue = this.value.substring(7).replace(/[^0-9]/g, '');
                if (numericValue.length > 8) {
                    numericValue = numericValue.substring(0, 8);
                }

                let format = '(+502) ';
                for (let i = 0; i < 4; i++) {
                    format += (i < numericValue.length) ? numericValue[i] : '';
                }
                if (numericValue.length > 4) {
                    format += ' ';
                    for (let i = 4; i < 8; i++) {
                        format += (i < numericValue.length) ? numericValue[i] : '';
                    }
                }

                this.value = format;
                this.setSelectionRange(this.value.length, this.value.length); // Mover el cursor al final.
            });

            // Prevenir pegar o arrastrar texto al campo de entrada.
            codigoTelefonoInput.addEventListener('paste', function(e) {
                e.preventDefault();
            });
            codigoTelefonoInput.addEventListener('drop', function(e) {
                e.preventDefault();
            });
        });
    </script>
</div>
