@php
    Carbon\Carbon::setLocale('es');
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-700 leading-tight">
            Perfil de {{ $athlete->name }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-100 shadow-sm rounded-lg">
                <div class="p-6 w-full md:w-3/4">
                    {{-- Basic Info --}}
                    <div class="text-gray-800">
                        <fieldset class="border border-amber-300 rounded-lg p-4">
                            <legend class="font-semibold text-lg">Datos basicos</legend>
                            <p><span class="font-semibold">Nombre:</span> {{ $athlete->name }}</p>
                            <p><span class="font-semibold">Sexo:</span> {{ $athlete->gender }}</p>
                            <p><span class="font-semibold">Edad:</span> {{ Carbon\Carbon::parse($athlete->dob)->age }}
                            </p>
                            <p><span class="font-semibold">Fecha de nacimiento:</span> {{ Carbon\Carbon::parse($athlete->dob)->translatedFormat('l, d M Y') }}</p>

                            <button onclick="Livewire.emit('openModal', 'edit-athlete', {{ json_encode(['athlete' => $athlete]) }})" class="pt-2 text-amber-500 hover:underline">Modificar informacion</button>
                        </fieldset>
                    </div>

                    {{-- Current Week --}}
                    <div class="text-gray-100 pt-4">
                        <livewire:current-week-workouts :athlete="$athlete" />
                    </div>

                    {{-- All --}}
                    <div class="text-gray-100 mt-10">
                        <livewire:athlete-workouts :athlete="$athlete" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>