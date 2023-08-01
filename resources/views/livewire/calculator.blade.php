<div>
    <div class="flex items-center flex-col">
        <div class="flex p-16 mx-auto items-center justify-center gap-6">
            <input type="text" wire:model="number1" placeholder="Number 1"/>
            <select class="w-24" wire:model="action">
                <option>+</option>
                <option>/</option>
                <option>*</option>
                <option>-</option>
                <option>%</option>
            </select>
            <input type="text" wire:model="number2" placeholder="Number 2"/>
            <button wire:click="calculate" class="bg-purple-500 hover:bg-purple-600 px-4 py-2 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white {{$disabled ? 'disabled' : ''}}">=</button>
        </div>
        <p class="text-3xl">{{ $result }}</p>
    </div>
</div>
