<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <x-table :headers="['Id', 'Nombre', 'Apellido', 'Edad', 'Correo']" :data="[
        0 => [
            'Id' => 1,
            'Nombre' => 'Juan',
            'Apellido' => 'Perez',
            'Edad' => '20',
            'Correo' => 'Correo@gmail.com',
        ]
    ]" :title="'Usuarios'"></x-table>

    <p class="mt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, est?</p>

</x-app-layout>
