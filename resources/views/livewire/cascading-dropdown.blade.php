<div>
    <div class="flex flex-col gap-6 py-16 mx-auto w-[400px]">
        <select wire:model="selectedContinent" wire:change="changeContinent">
            <option value="-1">Please select continent</option>
            @foreach ($continents as $continent)
                <option value="{{$continent->id}}">{{$continent->name}}</option>
            @endforeach
        </select>

        <div class="flex relative">
            <p class="absolute top-0 left-0 right-0 bottom-0 px-3 py-2 bg-opacity-90 bg-white z-10" wire:loading>
                Loading...
            </p>
            <select wire:model="selectedCountry" class="flex-1">
                <option value="-1">Please select country</option>
                @foreach ($countries as $country)
                    <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
