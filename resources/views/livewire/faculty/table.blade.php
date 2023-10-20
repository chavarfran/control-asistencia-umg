<div>
    <div class="col-12 mt-4">
        <div class="card mb-4">
            <div class="card-header pb-0 p-3">
                <h6 class="mb-1">Facultades</h6>
                <p class="text-sm">Lista de las facultades</p>
            </div>
            <div class="card-body p-3">
                <div class="row">
                    @foreach ($faculties as $faculty)
                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                    <a class="d-block shadow-xl border-radius-xl">
                                        <img src="../assets/img/facultad.jpg" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-xl">
                                    </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                    <p class="text-gradient text-dark mb-2 text-sm">Facultad de</p>
                                    <a href="javascript:;">
                                        <h5>
                                            {{ $faculty->nombre }}
                                        </h5>
                                    </a>
                                    <p class="mb-4 text-sm">
                                        {{ $faculty->descripcion }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
