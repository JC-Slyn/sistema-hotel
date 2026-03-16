<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel Administrativo - Hotel
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                <a href="/clientes" class="bg-blue-500 text-white p-6 rounded-lg text-center shadow">
                    <h3 class="text-xl font-bold">Clientes</h3>
                </a>

                <a href="/habitaciones" class="bg-green-500 text-white p-6 rounded-lg text-center shadow">
                    <h3 class="text-xl font-bold">Habitaciones</h3>
                </a>

                <a href="/reservas" class="bg-yellow-500 text-white p-6 rounded-lg text-center shadow">
                    <h3 class="text-xl font-bold">Reservas</h3>
                </a>

                <a href="/pagos" class="bg-red-500 text-white p-6 rounded-lg text-center shadow">
                    <h3 class="text-xl font-bold">Pagos</h3>
                </a>

            </div>

        </div>
    </div>
</x-app-layout>
