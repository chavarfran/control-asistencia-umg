<div>
    <div class="container py-4">
        <div class="row justify-content-center"> <!-- Centralizar el contenido en la fila -->
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h5 class="mb-0">{{ __('Formulario de temas') }}</h5>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <form action="{{ route('career-store') }}" method="POST">
                            @csrf
                            <div class="column">
                                <div class="form-group">
                                    <label for="tema.id_curso" class="form-control-label">{{ __('Curso') }}</label>
                                    <div class="@error('tema.id_curso')border border-danger rounded-3 @enderror">
                                        <select wire:model="id_course" class="form-control" name="id_curso">
                                            <option value="" selected="selected" hidden="hidden">Seleccione un
                                                curso</option>
                                            @foreach ($schedules as $schedule)
                                                <option value="{{ $schedule->course->id }}">
                                                    {{ $schedule->course->nombre_curso }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('id_curso')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tema-fecha"
                                        class="form-control-label">{{ __('fecha asignada') }}</label>
                                    <div class="@error('tema.fecha')border border-danger rounded-3 @enderror">
                                        <input class="form-control" type="date" id="fecha" name="fecha"
                                            wire:model="date_selected" wire:change="dateValidate">
                                    </div>
                                    @if ($error)
                                        <div class="text-danger">{{ $error }}</div>
                                    @else
                                        <div class="text-danger"></div>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="tema-descripcion"
                                        class="form-control-label">{{ __('Descripción') }}</label>
                                    <div class="@error('tema.descripcion')border border-danger rounded-3 @enderror">
                                        <textarea class="form-control" name="descripcion" placeholder="Descripción de la tema"></textarea>
                                    </div>
                                    @error('descripcion')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>


                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url()->previous() }}" type="button"
                                    class="btn bg-gradient btn-md mt-4 mb-4"">Cancelar</a>
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
