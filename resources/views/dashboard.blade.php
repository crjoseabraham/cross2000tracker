<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-700 leading-tight">
                {{ __('Panel') }}
            </h2>
        </div>
    </x-slot>

    <!-- <p class="py-20 text-black text-lg">
        @foreach ($athletes as $athlete)
    <p>{{ $athlete->athlete->name }}: {{ $athlete->total }} - {{ $athlete->date}} / Promedio: {{ $athlete->where('athlete_id', $athlete->athlete_id)->avg('total') }}</p>
    @endforeach
    </p>

    <p class="py-20 text-black text-lg">
        @foreach ($averages as $avg)
    <p>{{ $avg['name'] }}: {{ $avg['avg'] }}</p>
    @endforeach
    </p> -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 shadow-sm sm:rounded-lg flex flex-wrap md:flex-nowrap justify-between">
                <div class="p-6 w-full md:w-3/4">
                    <div class="flex justify-between">
                        <button onclick="Livewire.emit('openModal', 'add-workout')" class="inline-flex items-center px-4 py-2 h-max bg-amber-500 hover:bg-amber-600 text-white text-sm font-medium rounded-md">
                            <svg class="svg-icon h-5 w-5 mr-2" stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10"></path>
                            </svg>
                            Registrar puntaje
                        </button>

                        <button onclick="Livewire.emit('openModal', 'find-athlete')" class="inline-flex items-center px-4 py-2 h-max bg-zinc-500 hover:bg-zinc-600 text-white text-sm font-medium rounded-md">
                            <svg class="svg-icon h-5 w-5 mr-2" stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
                            </svg>
                            Buscar
                        </button>
                    </div>

                    <div class="row py-6">
                        <button onclick="Livewire.emit('openModal', 'add-athlete')" class="inline-flex items-center px-4 py-2 h-max bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-md">Agregar a una persona</button>
                    </div>

                    <div class="text-white py-6">
                        <livewire:weekly-stats />
                    </div>

                    <div class="text-white py-6">
                        <livewire:show-latest />
                    </div>

                    <div class="mt-4 p-6 bg-white rounded-lg shadow">
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
</x-app-layout>