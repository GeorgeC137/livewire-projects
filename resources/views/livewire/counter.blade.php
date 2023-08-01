<div class="p-36 flex justify-center gap-6 items-center">
    <button wire:click="increment" class="py-2 px-4 bg-purple-500 rounded texe-white">+</button>
    <span>{{ $count }}</span>
    <button wire:click="decrement" class="py-2 px-4 bg-purple-500 rounded texe-white">-</button>
</div>
