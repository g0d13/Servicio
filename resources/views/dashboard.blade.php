<x-app-layout>
    <x-slot name="header">
        Inicio
    </x-slot>
    <style>
        .icon{
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
        <div class="col-xl-4 col-lg-6">
            <div class="shadow card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Solicitudes</h5>
                            <span class="h2 font-weight-bold mb-0">1</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Desde ayer</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="shadow card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Reparaciones</h5>
                            <span class="h2 font-weight-bold mb-0">2</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                <i class="fas fa-chart-pie"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                        <span class="text-nowrap">Desde ayer</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card shadow card-stats mb-4 mb-xl-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Reparaciones</h5>
                            <span class="h2 font-weight-bold mb-0">1</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span class="text-nowrap">Desde la semana pasada</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-xl-8 col-lg-8">
            <x-table :headers="['Id', 'Nombre', 'Apellido', 'Edad', 'Correo']" :dataArray="[
                0 => [
                    'Id' => 1,
                    'Nombre' => 'Juan',
                    'Apellido' => 'Perez',
                    'Edad' => '20',
                    'Correo' => 'Correo@gmail.com',
                ]
            ]" :title="'Bitacoras'"></x-table>
        </div>
        <div class="col-xl-4 col-lg-4">
            <x-table :headers="['Id', 'Nombre', 'Apellido', 'Edad', 'Correo']" :dataArray="[
                0 => [
                    'Id' => 1,
                    'Nombre' => 'Juan',
                    'Apellido' => 'Perez',
                    'Edad' => '20',
                    'Correo' => 'Correo@gmail.com',
                ]
            ]" :title="'Mecanicos'"></x-table>
        </div>
    </div> --}}
</x-app-layout>
