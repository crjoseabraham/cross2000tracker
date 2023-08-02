<div>
    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800 border-b border-b-green-400">
                Mejores puntuaciones en la semana
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
                    Desde la mas alta a la mas baja
                </p>
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
                        Total
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($weekWorkouts as $row)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <td class="px-3 py-1">
                        {{ $loop->index + 1 }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        <a href="/athlete/{{$row->athlete->id}}">
                            {{ $row->athlete->name }}
                        </a>
                    </th>
                    <td class="px-6 py-4" nowrap>
                        {{ $row->total }}%
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        {{ strtoupper(Carbon\Carbon::parse($row->date)->translatedFormat('l')) }}
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>