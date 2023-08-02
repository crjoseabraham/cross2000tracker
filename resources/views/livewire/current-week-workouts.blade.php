<div class="relative overflow-x-auto shadow-md rounded-lg">
    @if (count($thisWeek) < 1) <div
        class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Datos de la semana en curso
        </h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">
            No hay registros de esta semana
        </p>
        <p>
            <button onclick="Livewire.emit('openModal', 'add-workout')" class="mt-2 inline-flex items-center px-4 py-2 h-max bg-amber-500 hover:bg-amber-600 text-white text-sm font-medium rounded-md">
                            <svg class="svg-icon h-5 w-5 mr-2" stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10"></path>
                            </svg>
                            Registrar puntaje
                        </button>
        </p>
</div>
@else
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <caption
        class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800 border-b border-b-amber-400">
        Datos de la semana en curso
        <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Ordenados del mas reciente al mas antiguo.
        </p>
        <p>
            <button onclick="Livewire.emit('openModal', 'add-workout')" class="mt-2 inline-flex items-center px-4 py-2 h-max bg-amber-500 hover:bg-amber-600 text-white text-sm font-medium rounded-md">
                            <svg class="svg-icon h-5 w-5 mr-2" stroke="currentColor" viewBox="0 0 20 20">
                                <path d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10"></path>
                            </svg>
                            Registrar puntaje
                        </button>
        </p>
    </caption>
    <thead class="text-xs text-gray-700 uppercase dark:text-gray-200">
        <tr>
            <th scope="col" class="px-3 py-1">
                &nbsp;
            </th>
            <th scope="col" class="px-6 py-3">
                Fecha
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                Total
            </th>
            <th scope="col" class="px-6 py-3" nowrap>
                WOD 1
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800" nowrap>
                WOD 2
            </th>
            <th scope="col" class="px-6 py-3" nowrap>
                WOD 3
            </th>
            <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800" nowrap>
                WOD 4
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($thisWeek as $row)
        <tr class="border-b border-gray-200 dark:border-gray-700">
            <td class="px-3 py-1"
                wire:click="$emit('openModal', 'edit-workout', {{ json_encode(['workout_id' => $row->id]) }})">
                <svg class="svg-icon w-4 h-4" viewBox="0 0 20 20">
                    <path fill="#fbbf24"
                        d="M19.404,6.65l-5.998-5.996c-0.292-0.292-0.765-0.292-1.056,0l-2.22,2.22l-8.311,8.313l-0.003,0.001v0.003l-0.161,0.161c-0.114,0.112-0.187,0.258-0.21,0.417l-1.059,7.051c-0.035,0.233,0.044,0.47,0.21,0.639c0.143,0.14,0.333,0.219,0.528,0.219c0.038,0,0.073-0.003,0.111-0.009l7.054-1.055c0.158-0.025,0.306-0.098,0.417-0.211l8.478-8.476l2.22-2.22C19.695,7.414,19.695,6.941,19.404,6.65z M8.341,16.656l-0.989-0.99l7.258-7.258l0.989,0.99L8.341,16.656z M2.332,15.919l0.411-2.748l4.143,4.143l-2.748,0.41L2.332,15.919z M13.554,7.351L6.296,14.61l-0.849-0.848l7.259-7.258l0.423,0.424L13.554,7.351zM10.658,4.457l0.992,0.99l-7.259,7.258L3.4,11.715L10.658,4.457z M16.656,8.342l-1.517-1.517V6.823h-0.003l-0.951-0.951l-2.471-2.471l1.164-1.164l4.942,4.94L16.656,8.342z">
                    </path>
                </svg>
            </td>
            <td class="px-6 py-4" nowrap>
                {{ Carbon\Carbon::parse($row->date)->toFormattedDateString() }}
            </td>
            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                {{ $row->total }}%
            </td>
            <td class="px-6 py-4">
                {{ $row->wod1 }}%
            </td>
            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                {{ $row->wod2 }}%
            </td>
            <td class="px-6 py-4">
                {{ $row->wod3 }}%
            </td>
            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                {{ $row->wod4 }}%
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endif
</div>

@if (count($thisWeek) > 0)
<div
    class="mt-4 block w-full p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Estadisticas de la semana</h5>

    <dl
        class="grid w-full grid-cols-2 gap-8 p-4 mx-auto text-gray-900 dark:text-white sm:p-8">
        <div class="flex flex-col items-center justify-center">
            <dt class="mb-2 text-3xl font-extrabold text-green-500">{{ $bestDay->total }}%</dt>
            <dd class="text-gray-500 dark:text-gray-400">
                <p>Mejor dia</p>
                <p class="text-sm">
                    {{ Carbon\Carbon::parse($bestDay->date)->translatedFormat('l, d M') }}
                </p>
            </dd>
        </div>
        <div class="flex flex-col items-center justify-center">
            <dt class="mb-2 text-3xl font-extrabold text-red-500">{{ $worstDay->total }}%</dt>
            <dd class="text-gray-500 dark:text-gray-400">
                <p>Dia mas debil</p>
                <p class="text-sm">
                    {{ Carbon\Carbon::parse($worstDay->date)->translatedFormat('l, d M') }}
                </p>
            </dd>
        </div>
    </dl>
</div>
@endif