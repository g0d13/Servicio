<x-app-layout>
    <div>
        <x-slot name="header">
            Inicio
        </x-slot>
        <style>
            .icons{
                width: 50px;
                display: flex;
                justify-content: center;
                height: 50px;
                align-items: center;
            }
            .bg-yellow {
                background-color: #11cdef;
            }
        </style>
        <div class="row mb-4">
            <div class="col-xl-6 col-lg-6">
                <div class="shadow card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6 class="card-title text-uppercase text-muted mb-0">Solicitudes hoy</h6>
                                <span class="h2 font-weight-bold mb-0">{{ \App\Models\Solicitud::whereDate('created_at', \Carbon\Carbon::today())->count() }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icons icon-shape bg-danger text-white rounded-circle shadow">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="shadow card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h6 class="card-title text-uppercase text-muted mb-0">Reparaciones hoy</h6>
                                <span class="h2 font-weight-bold mb-0">{{ \App\Models\Reparacion::whereDate('created_at', \Carbon\Carbon::today())->count() }}</span>
                            </div>
                            <div class="col-auto">
                                <div class="icons icon-shape bg-warning text-white rounded-circle shadow">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4 mt-4">
            <h6>Reportes</h6>
            <div class="col-xl-4 col-lg-6">
                <div class="shadow card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex">
                                <h6 class="card-title text-uppercase text-muted mb-0">Reporte diario</h6>
                            </div>
                            <div class="col-auto">
                                {{-- <a href="{{ route('reporte', ['tipo' => 'diario']) }}" class="btn btn-success"><i class="fas fa-download"></i></a> --}}
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-wrap">{{ \Carbon\Carbon::now()->day }} de {{ \Carbon\Carbon::now()->monthName }} de {{ \Carbon\Carbon::now()->year }}</span>
                            <select name="" id="" class="form-control mt-3" onchange="window.location = this.value;">
                                <option value="" >Seleccione la línea de producción</option>
                                @foreach ($plantas as $planta)
                                    <option value="{{ route('reporte', ['tipo' => 'diario', 'plantaId' => $planta->id]) }}">
                                        Línea de producción {{ $planta->id }}
                                    </option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="shadow card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex">
                                <h6 class="card-title text-uppercase text-muted mb-0">Reporte semanal</h6>
                            </div>
                            <div class="col-auto">
                                {{-- <a href="{{ route('reporte', ['tipo' => 'semanal']) }}" class="btn btn-success"><i class="fas fa-download"></i></a> --}}
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            @php
                                $inicioSemana = \Carbon\Carbon::now()->subDays(\Carbon\Carbon::now()->dayOfWeek);
                                $finSemana = \Carbon\Carbon::now()->subDays(\Carbon\Carbon::now()->dayOfWeek)->addDays(6);
                            @endphp
                            <span class="text-nowrap">{{ $inicioSemana->day.' de '.$inicioSemana->monthName.' de '.$inicioSemana->year }} al {{ $finSemana->day.' de '.$finSemana->monthName.' de '.$finSemana->year }}</span>
                            <select name="" id="" class="form-control mt-3" onchange="window.location = this.value;">
                                <option value="" >Seleccione la línea de producción</option>
                                @foreach ($plantas as $planta)
                                    <option value="{{ route('reporte', ['tipo' => 'semanal', 'plantaId' => $planta->id]) }}">
                                        Línea de producción {{ $planta->id }}
                                    </option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="shadow card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex">
                                <h6 class="card-title text-uppercase text-muted mb-0">Reporte mensual</h6>
                            </div>
                            <div class="col-auto">
                                {{-- <a href="{{ route('reporte', ['tipo' => 'mensual']) }}" class="btn btn-success"><i class="fas fa-download"></i></a> --}}
                            </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                            <span class="text-nowrap text-capitalize">{{ \Carbon\Carbon::now()->monthName }}</span>
                            <select name="" id="" class="form-control mt-3" onchange="window.location = this.value;">
                                <option value="" >Seleccione la línea de producción</option>
                                @foreach ($plantas as $planta)
                                    <option value="{{ route('reporte', ['tipo' => 'mensual', 'plantaId' => $planta->id]) }}">
                                        Línea de producción {{ $planta->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</x-app-layout>
