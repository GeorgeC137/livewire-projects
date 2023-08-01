<form wire:submit.prevent="submit" class="w-[400px] py-16 mx-auto">
    @if (session()->has('message'))
        <div class="bg-emarald-500 text-gray-100  font-bold mb-4 px-4 py-3">
            {{ session('message') }}
        </div>
    @endif

    <div class="flex gap-4 mb-4">
        <label>
            <input type="radio" value="customer" name="role" wire:model="role">
            Cusomer
        </label>
        <label>
            <input type="radio" value="vendor" name="role" wire:model="role">
            Vendor
        </label>
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="first_name"
            class="w-full border @error('first_name') border-red-500 @enderror" placeholder="Fisrt Name">
        @error('first_name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="last_name"
            class="w-full border @error('last_name') border-red-500 @enderror" placeholder="Last Name">
        @error('last_name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="email"
            class="w-full border @error('email') border-red-500 @enderror" placeholder="Email">
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <input type="password" wire:model.debounce.500ms="password"
            class="w-full border @error('password') border-red-500 @enderror" placeholder="Password">
        @error('password')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </div>

    @if ($role === 'vendor')
        <div class="mb-4">
            <input type="text" wire:model.debounce.500ms="company_name" placeholder="Company Name"
                class="border w-full @error('company_name')
                border-red-500 @enderror">
            @error('company_name')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    @endif

    @if ($role === 'vendor')
        <div class="mb-4">
            <input type="number" wire:model.debounce.500ms="vat_number" placeholder="VAT Number"
                class="border w-full @error('vat_number')
                border-red-500 @enderror">
            @error('vat_number')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    @endif

    <button type="submit" class="px-4 py-2 bg-purple-500 hover:bg-purple-600 rounded text-gray-100">Register</button>
</form>
