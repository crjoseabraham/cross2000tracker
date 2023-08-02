<div class="p-6">
    <h1 class="text-xl">Agregar un ejercicio</h1>
    <p class="border border-transparent border-t-gray-300 mt-3">&nbsp;</p>
    <div>

        <form wire:submit.prevent="save" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nombre del ejercicio o la fase:
                </label>
                <input class="border border-gray-300 appearance-none rounded w-full py-2 px-3 text-gray-700 focus:outline-none" id="name" name="name" wire:model.defer="name" type="text" required>
            </div>

            <div class="flex items-center justify-between">
                <button class="inline-flex items-center px-4 py-2 h-max bg-green-500 hover:bg-green-600 text-white text-sm font-medium rounded-md" type="submit">
                    Guardar cambios
                </button>

                <button wire:click="$emit('closeModal')">Cerrar</button>
            </div>
        </form>

    </div>
</div>