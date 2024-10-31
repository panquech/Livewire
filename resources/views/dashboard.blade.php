<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <!-- si está dentro de una carpeta, lo indicamos: 
                'carpeta.nombre-vista' -->
                <!-- para pasarle variables se hace por medio de arreglo: -->
                @livewire('posts.create-post', [
                    'title' => 'HOLA WEBUDOS'    
                ])

                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
