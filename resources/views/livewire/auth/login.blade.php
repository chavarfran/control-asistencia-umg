<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <a class="d-flex align-items-center justify-content-center w-100 m-0" href="{{ route('dashboard') }}">
                            <img src="../assets/img/logo_white.png" class="w-60" alt="...">
                        </a>
                        <div class="card-header pb-0 text-center bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{ __('Bienvenido') }}</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="login" action="#" method="POST" role="form text-left">
                                <div class="mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input wire:model="email" id="email" type="email" class="form-control"
                                            placeholder="Correo Electronico" aria-label="Email"
                                            aria-describedby="email-addon">
                                    </div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input wire:model="password" id="password" type="password" class="form-control"
                                            placeholder="Contraseña" aria-label="Password"
                                            aria-describedby="password-addon">
                                    </div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-check form-switch">
                                    <input wire:model="remember_me" class="form-check-input" type="checkbox"
                                        id="rememberMe">
                                    <label class="form-check-label"
                                        for="rememberMe">{{ __('Recordar en este equipo') }}</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Iniciar sesión') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <small class="text-muted">{{ __('¿Olvidaste tu contraseña? Restablecer su contraseña') }} <a
                                    href="{{ route('forgot-password') }}"
                                    class="text-info text-gradient font-weight-bold">{{ __('aquí') }}</a></small>
                            <p class="mb-4 text-sm mx-auto">
                                {{ __('¿No tienes una cuenta?') }}
                                <a href="{{ route('sign-up') }}"
                                    class="text-info text-gradient font-weight-bold">{{ __('Inscribirse') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
