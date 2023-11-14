<a class="nav-link {{ Route::currentRouteName() == 'login' ? 'active' : '' }}" wire:click="logout">
    <div
        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
        <i style="font-size: 1rem;"
            class="fas fa-sign-out-alt ps-2 pe-2 text-center
                        {{ in_array(request()->route()->getName(),['login'])? 'text-white': 'text-dark' }}"></i>
    </div>
    <span class="nav-link-text ms-1">Cerrar sesión</span>
</a>
