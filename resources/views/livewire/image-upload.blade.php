<div>
    <form wire:submit.prevent="save" class="flex flex-col py-16 mx-auto w-[400px]">
        @if ($image)
            Preview:
            <div class="flex flex-wrap gap-6 justify-center">
                @foreach ($image as $im)
                    <img src="{{ $im->temporaryUrl() }}" class="object-cover w-[110px] h-[90px]">
                @endforeach
            </div>
        @endif

        <input type="file" wire:model="image" class="mb-4" multiple>

        @error('image')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit" class="px-4 py-2 bg-purple-500 rounded text-white hover:bg-purple-600">Save Photo</button>
    </form>

    <div class="flex-wrap gap flex">
        @foreach ($images as $image)
            <img src="{{ $image }}" class="object-cover w-[128px] h-[120px]">
        @endforeach
    </div>
</div>
