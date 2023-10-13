<div>
    <div class="container py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h5 class="mb-0">{{ __('Formulario de catedratico') }}</h5>
            </div>
            <div class="card-body pt-4 p-3">

                {{-- @if ($showDemoNotification)
                    <div wire:model="showDemoNotification" class="mt-3  alert alert-primary alert-dismissible fade show"
                        role="alert">
                        <span class="alert-text text-white">
                            {{ __('You are in a demo version, you can\'t update the profile.') }}</span>
                        <button wire:click="$set('showDemoNotification', false)" type="button" class="btn-close"
                            data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                @if ($showSuccesNotification)
                    <div wire:model="showSuccesNotification"
                        class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span
                            class="alert-text text-white">{{ __('¡La información de tu perfil se ha guardado correctamente!') }}</span>
                        <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close"
                            data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif --}}

                <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="profesor-foto" class="form-control-label">{{ __('Fotografia del catedratico') }}</label>
                                <div class="@error('profesor.foto')border border-danger rounded-3 @enderror">
                                    <input wire:model="profesor.foto" class="form-control" type="file"
                                        placeholder="Agrege una fotografia del catedratico" id="foto">
                                </div>
                                @error('profesor.foto')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="profesor-primer_nombre" class="form-control-label">{{ __('Primer nombre') }}</label>
                                <div class="@error('profesor.primer_nombre')border border-danger rounded-3 @enderror">
                                    <input wire:model="profesor.primer_nombre" class="form-control" type="text"
                                        placeholder="Primer nombre del catedratico" id="primer_nombre">
                                </div>
                                @error('profesor.primer_nombre')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="profesor-segundo_nombre" class="form-control-label">{{ __('Segundo nombre') }}</label>
                                <div class="@error('profesor.segundo_nombre')border border-danger rounded-3 @enderror">
                                    <input wire:model="profesor.segundo_nombre" class="form-control" type="text"
                                        placeholder="Segundo nombre del catedratico" id="segundo_nombre">
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
                                <label for="profesor-primer_apellido" class="form-control-label">{{ __('Primer apellido') }}</label>
                                <div class="@error('profesor.primer_apellido')border border-danger rounded-3 @enderror">
                                    <input wire:model="profesor.primer_apellido" class="form-control" type="text"
                                        placeholder="Primer apellido del catedratico" id="primer_apellido">
                                </div>
                                @error('profesor.primer_apellido')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="profesor-segundo_apellido" class="form-control-label">{{ __('Segundo Apellido') }}</label>
                                <div class="@error('profesor.segundo_apellido')border border-danger rounded-3 @enderror">
                                    <input wire:model="profesor.segundo_apellido" class="form-control" type="text"
                                        placeholder="Segundo Apellido del catedratico" id="segundo_apellido">
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
                                    <input wire:model="profesor.dpi" class="form-control" type="text"
                                        placeholder="0000 00000 0000" id="dpi">
                                </div>
                                @error('profesor.dpi')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="profesor-email" class="form-control-label">{{ __('Correo electrónico') }}</label>
                                <div class="@error('profesor.email')border border-danger rounded-3 @enderror">
                                    <input wire:model="profesor.email" class="form-control" type="email"
                                        placeholder="@example.com" id="email">
                                </div>
                                @error('profesor.email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="profesor-telefono" class="form-control-label">{{ __('Teléfono') }}</label>
                                <div class="@error('profesor.telefono')border border-danger rounded-3 @enderror">
                                    <input wire:model="profesor.telefono" class="form-control" type="tel"
                                        placeholder="(+502) 0000-0000" id="telefono">
                                </div>
                                @error('profesor.telefono')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="profesor-direccion" class="form-control-label">{{ __('Dirección') }}</label>
                                <div class="@error('profesor.direccion')border border-danger rounded-3 @enderror">
                                    <input wire:model="profesor.direccion" class="form-control" type="text"
                                        placeholder="Ingrese una dirección de residencia" id="direccion">
                                </div>
                                @error('profesor.direccion')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="profesor-id_municipio" class="form-control-label">{{ __('Municipio') }}</label>
                                <div class="@error('profesor.id_municipio')border border-danger rounded-3 @enderror">
                                    <select class="form-control" id="id_municipio">
                                        <option>Seleccione un municipio</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                @error('profesor.id_municipio')
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
</div>
