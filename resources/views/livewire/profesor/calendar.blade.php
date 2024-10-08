<div>
    <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
        <div class="card py-2 px-4">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="calendar-header mb-3">
                        <span class="mx-3">{{ $currentMonth }} / {{ $currentYear }}</span>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0 p-2 w-100">
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
                            @php

                                $today = now()->format('Y-m-d');
                                $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
                                $startDayOfWeek = (int) Carbon\Carbon::create($currentYear, $currentMonth, 1)->format('w');
                                $days = array_merge(array_fill(0, $startDayOfWeek, null), range(1, $daysInMonth));
                                while (count($days) % 7 !== 0) {
                                    $days[] = null;
                                }
                            @endphp
                            @foreach (array_chunk($days, 7) as $week)
                                <tr>
                                    @foreach ($week as $day)
                                        <td
                                            class="{{ $day && $today == Carbon\Carbon::create($currentYear, $currentMonth, $day)->format('Y-m-d') ? 'calendar-cell bg-gradient-ligth text-white' : '' }}">
                                            @if ($day)
                                                {{ $day }}<br>
                                                @php
                                                    $diaDeLaSemana = ucfirst(
                                                        Carbon\Carbon::create($this->currentYear, $this->currentMonth, $day)
                                                            ->locale('es')
                                                            ->isoFormat('dddd'),
                                                    );
                                                @endphp
                                                @if (isset($curso_dia[$diaDeLaSemana]))
                                                    @foreach ($curso_dia[$diaDeLaSemana] as $nombreCurso)
                                                        <span
                                                            class="badge badge-sm bg-gradient-dark">{{ $nombreCurso }}</span><br>
                                                    @endforeach
                                                @endif
                                            @else
                                                &nbsp;
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
</div>
