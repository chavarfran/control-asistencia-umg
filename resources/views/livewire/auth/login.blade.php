<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-7">
                        <a class="d-flex align-items-center justify-content-center w-100 m-0" href="{{ route('dashboard') }}">
                            <img src="../assets/img/logo_white.png" class="w-60" alt="...">
                        </a>
                        <div class="card-header pb-0 text-center bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{ __('Bienvenido') }}</h3>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="login" action="#" method="POST" role="form text-left">
                                <div class="mb-2">
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
                                <div class="mb-2">
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
                                    <a class="btn btn-dark w-100 mt-2 mb-0" href="/google-auth/redirect">
                                        <svg width="24px" height="24px" viewBox="0 0 64 64" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g id="google-icon" transform="translate(3.000000, 2.000000)"
                                                    fill-rule="nonzero">
                                                    <path
                                                        d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267"
                                                        id="Path" fill="#4285F4"></path>
                                                    <path
                                                        d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667"
                                                        id="Path" fill="#34A853"></path>
                                                    <path
                                                        d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782"
                                                        id="Path" fill="#FBBC05"></path>
                                                    <path
                                                        d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769"
                                                        id="Path" fill="#EB4335"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <button type="submit"
                                        class="btn bg-gradient-info btn-lg w-100 mt-4 mb-0">{{ __('Iniciar sesión') }}</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <small class="text-muted">{{ __('¿Olvidaste tu contraseña? Restablecer su contraseña') }} <a
                                    href="{{ route('forgot-password') }}"
                                    class="text-info text-gradient font-weight-bold">{{ __('aquí') }}</a></small>
                            {{-- <p class="mb-4 text-sm mx-auto">
                                {{ __('¿No tienes una cuenta?') }}
                                <a href="{{ route('sign-up') }}"
                                    class="text-info text-gradient font-weight-bold">{{ __('Inscribirse') }}</a> --}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
