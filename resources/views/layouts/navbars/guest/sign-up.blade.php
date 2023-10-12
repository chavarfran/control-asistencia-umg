<nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3  navbar-transparent mt-4">
    <div class="container">
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav mx-auto">
                @if (auth()->user())
                    <li class="nav-item">
                        <a class="nav-link text-white me-2" href="{{ route('profile') }}">
                            <i class="fa fa-user opacity-6  me-1"></i>
                            Perfil
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link text-white me-2" href="{{ auth()->user() ? route('static-sign-up') : route('sign-up') }}">
                        <i class="fas fa-user-circle opacity-6  me-1"></i>
                        Incribirse
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white me-2" href="{{ auth()->user() ? route('sign-in') : route('login') }}">
                        <i class="fas fa-key opacity-6  me-1"></i>
                        Iniciar sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
