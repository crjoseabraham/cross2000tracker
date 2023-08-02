<div>
    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption
                class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800 border-b border-b-amber-400">
                    Tabla general
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Todos los registros ordenados del mas reciente al mas
                    antiguo.</p>
            </caption>
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-200">
                <tr>
                    <th scope="col" class="px-3 py-1">
                        &nbsp;
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Nombre
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
                @foreach ($latest as $row)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td class="px-3 py-1"
                        wire:click="$emit('openModal', 'edit-workout', {{ json_encode(['workout_id' => $row->id]) }})">
                        <svg class="svg-icon w-4 h-4" viewBox="0 0 20 20">
                            <path fill="#fbbf24"
                                d="M19.404,6.65l-5.998-5.996c-0.292-0.292-0.765-0.292-1.056,0l-2.22,2.22l-8.311,8.313l-0.003,0.001v0.003l-0.161,0.161c-0.114,0.112-0.187,0.258-0.21,0.417l-1.059,7.051c-0.035,0.233,0.044,0.47,0.21,0.639c0.143,0.14,0.333,0.219,0.528,0.219c0.038,0,0.073-0.003,0.111-0.009l7.054-1.055c0.158-0.025,0.306-0.098,0.417-0.211l8.478-8.476l2.22-2.22C19.695,7.414,19.695,6.941,19.404,6.65z M8.341,16.656l-0.989-0.99l7.258-7.258l0.989,0.99L8.341,16.656z M2.332,15.919l0.411-2.748l4.143,4.143l-2.748,0.41L2.332,15.919z M13.554,7.351L6.296,14.61l-0.849-0.848l7.259-7.258l0.423,0.424L13.554,7.351zM10.658,4.457l0.992,0.99l-7.259,7.258L3.4,11.715L10.658,4.457z M16.656,8.342l-1.517-1.517V6.823h-0.003l-0.951-0.951l-2.471-2.471l1.164-1.164l4.942,4.94L16.656,8.342z">
                            </path>
                        </svg>
                    </td>
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        <a href="/athlete/{{$row->athlete->id}}">
                            {{ $row->athlete->name }}
                        </a>
                    </th>
                    <td class="px-6 py-4" nowrap>
                        {{ Carbon\Carbon::parse($row->date)->translatedFormat('d M, Y') }}
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
    </div>


    <div class="row py-4">
        <div class="col-md-12">
            {{ $latest->links() }}
        </div>
    </div>
</div>