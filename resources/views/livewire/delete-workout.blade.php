<div class="p-6">
    <h1 class="text-xl">Eliminar registro</h1>

    <p class="text-md py-6">¿Estás seguro de que deseas eliminar este registro? Esta acción no puede deshacerse</p>

    <div class="flex justify-between">
        <form wire:submit.prevent="destroy" method="POST">
            <button type="submit" class="inline-flex items-center px-4 py-2 h-max bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-md">Si, elimínalo</button>
        </form>

        <button wire:click="$emit('closeModal')">Cancelar</button>
    </div>
</div>