<div>
    @include('layouts.navbars.guest.login')
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <p class="mb-0">{{ __('¿Olvidaste tu contraseña? Ingresa tu correo electrónico aquí') }}
                            <p>
                        </div>
                        <div class="card-body">

                            <form wire:submit.prevent="resetPassword" action="#" method="POST" role="form text-left">
                                <div>
                                    <label for="email">{{ __('Correo') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="email" id="email" type="email" class="form-control"
                                            placeholder="Correo" aria-label="Correo" aria-describedby="email-addon">
                                    </div>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="password">{{ __('Contraseña') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="password" id="password" type="password" class="form-control"
                                            placeholder="Contraseña" aria-label="Contraseña"
                                            aria-describedby="password-addon">
                                    </div>
                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                                <div>
                                    <label for="passwordConfirmation">{{ __('Confirmación de contraseña') }}</label>
                                    <div
                                        class="@error('passwordConfirmation')border border-danger rounded-3 @enderror mb-3">
                                        <input wire:model="passwordConfirmation" id="password" type="password"
                                            class="form-control" placeholder="Confirmación de contraseña"
                                            aria-label="Password" aria-describedby="password-addon">
                                    </div>
                                    @error('passwordConfirmation') <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Restablecer la contraseña') }}</button>
                                </div>
                            </form>

                            @if ($showSuccesNotification)
                                <div wire:model="showSuccesNotification"
                                    class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                    <span class="alert-text text-white">
                                        {{ __('¡Su contraseña ha sido cambiada exitosamente! ¡Puedes iniciar sesión ahora!') }}</a></span>
                                    <button wire:click="$set('showSuccesNotification', false)" type="button"
                                        class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif

                            @if ($showFailureNotification)
                                <div wire:model="showFailureNotification"
                                    class="mt-3 alert alert-light alert-dismissible fade show" role="alert">
                                    <span class="alert-text">{{ '¡Por favor ingrese la dirección de correo electrónico correcta!' }}</span>
                                    <button wire:click="$set('showFailureNotification', false)" type="button"
                                        class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                            style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
