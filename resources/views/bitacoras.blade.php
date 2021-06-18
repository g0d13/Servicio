<x-app-layout>
    <x-slot name="header">
        Bitacoras
    </x-slot>
    <x-table :headers="['Id', 'Nombre', 'Apellido', 'Edad', 'Correo']" :dataArray="[
                0 => [
                    'Id' => 1,
                    'Nombre' => 'Juan',
                    'Apellido' => 'Perez',
                    'Edad' => '20',
                    'Correo' => 'Correo@gmail.com',
                ]
            ]" :title="'Bitacoras'"></x-table>
</x-app-layout>
