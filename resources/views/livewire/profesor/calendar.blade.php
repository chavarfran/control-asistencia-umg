
    <div class="col-lg-12 col-md-6 mb-md-0 mb-4 py-2">
        <div class="card">
            <div class="card-header pb-0">
                <div class="calendar-header mb-3">
                    <span class="mx-3">{{ $currentMonth }} / {{ $currentYear }}</span>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center mb-0 p-2">
                        <thead>
                            <tr>
                                <th>Domingo</th>
                                <th>Lunes</th>
                                <th>Martes</th>
                                <th>Miércoles</th>
                                <th>Jueves</th>
                                <th>Viernes</th>
                                <th>Sábado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (array_chunk($days, 7) as $week)
                                <tr>
                                    @foreach ($week as $day)
                                        <td>

                                            @if ($day->isSaturday())
                                                <span class="badge badge-sm bg-gradient-dark"> {{ $day->format('d') }} -
                                                    curso</span>
                                            @else
                                                {{ $day->format('d') }}
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
