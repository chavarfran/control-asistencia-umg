<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3"
    id="sidenav-main" data-color="dark">
    <div class="sidenav-header d-flex align-items-center justify-content-center elevated-border-radius">
        <a class="d-flex align-items-center justify-content-center h-100 w-50 m-0" href="{{ route('dashboard') }}">
            <img src="../assets/img/logoElula.png" class="full-width-height" alt="...">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto py-2" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-home ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['dashboard'])? 'text-white ': 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Inicio</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'perfil-usuario' ? 'active' : '' }}"
                    href="{{ route('perfil-usuario') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-user ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['perfil-usuario'])? 'text-white': 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Perfil Usuario</span>
                </a>
            </li>
            <li class="nav-item mt-2">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Opciones de usuario</h6>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'proyectos' ? 'active' : '' }}"
                    href="{{ route('proyectos') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-briefcase ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['proyectos'])? 'text-white': 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Marcos de trabajo</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'proyectos' ? 'active' : '' }}"
                    href="{{ route('proyectos') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-window-restore ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['proyectos'])? 'text-white': 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Aplicaciones</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'proyectos' ? 'active' : '' }}"
                    href="{{ route('proyectos') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-box-open ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['proyectos'])? 'text-white': 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Paquetes</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'proyectos' ? 'active' : '' }}"
                    href="{{ route('proyectos') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-desktop ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['proyectos'])? 'text-white': 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Mi dispositivo</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'proyectos' ? 'active' : '' }}"
                    href="{{ route('proyectos') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-book ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['proyectos'])? 'text-white': 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Documentación</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'vscode' ? 'active' : '' }}"
                    href="https://vscode.dev" target="_blank">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fi fi-brands-visual-basic ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['vscode'])? 'text-white': 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Visual Studio Code</span>
                </a>
            </li>
            <li class="nav-item pb-2">
                <a class="nav-link {{ Route::currentRouteName() == 'proyectos' ? 'active' : '' }}"
                    href="{{ route('proyectos') }}">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;"
                            class="fas fa-lg fa-users ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['proyectos'])? 'text-white': 'text-dark' }}"></i>
                    </div>
                    <span class="nav-link-text ms-1">Reunir Equipo</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
