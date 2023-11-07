<div>
    <div class="container py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">{{ __('Formulario de catedratico') }}</h5>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="{{ route('catedratico-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="profesor-foto"
                                    class="form-control-label">{{ __('Fotografia del catedratico') }}</label>
                                <div class="@error('profesor.foto')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="file"
                                        placeholder="Agrege una fotografia del catedratico" id="foto"
                                        name="foto">
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
                                        name="codigo_catedratico">
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
                                            name="primer_nombre">
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
                                            name="segundo_nombre">
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
                                            name="primer_apellido">
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
                                            name="segundo_apellido">
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
                                            id="dpi" name="dpi">
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
                                            id="email" name="email">
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
                                            id="telefono" name="telefono">
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
                                            name="direccion">
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
                                        <select wire:model="id_departamento" class="form-control"
                                            name="id_departamento">
                                            <option value="">Seleccione un deparamento</option>
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
                                        <select class="form-control" name="id_municipio">
                                            <option value="">Seleccione un municipio</option>
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
                            <a href="{{ url()->previous() }}" type="button" class="btn bg-gradient btn-md mt-4 mb-4"">Cancelar</a>
                                    <div class="mx-2"></div>
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
                let value = this.value.replace(/\D/g, '');  // Remover todo lo que no sea un dígito.

                // Aplicar formato.
                if (value.length > 4) {
                    value = value.substring(0, 4) + " " + value.substring(4);
                }
                if (value.length > 7) {
                    value = value.substring(0, 7) + " " + value.substring(7);
                }

                this.value = value.substring(0, 14);  // Solo tomar los primeros 14 caracteres.
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const codigoCatedraticoInput = document.getElementById("dpi");

            codigoCatedraticoInput.addEventListener('input', function() {
                let value = this.value.replace(/\D/g, '');  // Remover todo lo que no sea un dígito.

                // Aplicar formato.
                if (value.length > 4) {
                    value = value.substring(0, 4) + " " + value.substring(4);
                }
                if (value.length > 10) {
                    value = value.substring(0, 10) + " " + value.substring(10);
                }

                this.value = value.substring(0, 15);  // Solo tomar los primeros 16 caracteres, en caso de que el usuario pegue algo más largo.
            });
        });
    </script>
</div>
