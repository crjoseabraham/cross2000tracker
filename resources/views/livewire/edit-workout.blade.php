<div class="p-6">
    <h1 class="text-xl">Editar registro para {{ $workout->athlete->name }}</h1>

    <form wire:submit.prevent="save" method="POST" class="pt-6">
        <div class="mb-4">
            <div class="flex justify-between">
                {{-- WOD 1 --}}
                <div class="flex flex-col items-center justify-center">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for='wod1'>WOD 1:</label>

                    <select id='wod1' name='wod1' wire:model.defer='wod1' required
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        @for ($j = 0; $j < 26; $j++) @if ($j==$wod1) <option value={{ $wod1 }} selected>{{ $wod1 }}%
                            </option>
                            @else
                            <option value={{ $j }}>{{ $j }}% </option>
                            @endif
                            @endfor
                    </select>
                </div>

                {{-- WOD 2 --}}
                <div class="flex flex-col items-center justify-center">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for='wod2'>WOD 2:</label>

                    <select id='wod2' name='wod2' wire:model.defer='wod2' required
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        @for ($j = 0; $j < 26; $j++) @if ($j==$wod2) <option value={{ $wod2 }} selected>{{ $wod2 }}%
                            </option>
                            @else
                            <option value={{ $j }}>{{ $j }}% </option>
                            @endif
                            @endfor
                    </select>
                </div>

                {{-- WOD 3 --}}
                <div class="flex flex-col items-center justify-center">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for='wod3'>WOD 3:</label>

                    <select id='wod3' name='wod3' wire:model.defer='wod3' required
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        @for ($j = 0; $j < 26; $j++) @if ($j==$wod3) <option value={{ $wod3 }} selected>{{ $wod3 }}%
                            </option>
                            @else
                            <option value={{ $j }}>{{ $j }}% </option>
                            @endif
                            @endfor
                    </select>
                </div>

                {{-- WOD 4 --}}
                <div class="flex flex-col items-center justify-center">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for='wod4'>WOD 4:</label>

                    <select id='wod4' name='wod4' wire:model.defer='wod4' required
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        @for ($j = 0; $j < 26; $j++) @if ($j==$wod4) <option value={{ $wod4 }} selected>{{ $wod4 }}%
                            </option>
                            @else
                            <option value={{ $j }}>{{ $j }}% </option>
                            @endif
                            @endfor
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="dob">
                Fecha:
            </label>
            <input
                class="appearance-none border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="date" name="date" wire:model.defer="date" type="date" required>
        </div>

        <div class="mb-4">
            <div class="flex justify-end">
                <p class="text-red-500 hover:underline"
                    wire:click='$emit("openModal", "delete-workout", {{ json_encode(["workout_id" => $workout->id]) }})'>
                    Eliminar este registro</p>
            </div>
        </div>

        <div class="flex items-center justify-between">
            <button
                class="inline-flex items-center px-4 py-2 h-max bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-md"
                type="submit">
                Guardar cambios
            </button>

            <button wire:click="$emit('closeModal')">Cerrar</button>
        </div>
    </form>
</div>