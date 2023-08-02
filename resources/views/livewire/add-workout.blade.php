<div class="p-6">
    <h1 class="text-xl">Registrar puntaje de un dia</h1>

    <form wire:submit.prevent="save" method="POST">
        <div class="my-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Nombre de la persona:
            </label>
            <livewire:search-athlete />
        </div>
        <div class="mb-4">
            <div class="flex justify-between">
                @for ($i = 1; $i < 5; $i++) <div class="flex flex-col items-center justify-center">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for={{ 'wod' . $i }}>
                        WOD {{ $i }}:
                    </label>

                    <select id={{ 'wod' . $i }} name={{ 'wod' . $i }} wire:model.defer={{ 'wod' . $i }} required
                        class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-2 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        @for ($j = 0; $j < 26; $j++) <option value={{ $j }}>{{ $j }}%
                            </option> @endfor
                    </select>
            </div>
            @endfor
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

<div class="flex flex-wrap items-center mb-4">
    <input wire:model.defer="shouldCloseModal" checked id="default-checkbox" type="checkbox" value=""
        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-500 rounded focus:ring-blue-500 dark:focus:ring-blue-600">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">Cerrar despues de guardar</label>
    <p class="text-xs italic text-gray-700 pt-2 basis-full">Si desmarcas esta opcion, puedes seguir agregando datos
        hasta que
        termines</p>
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