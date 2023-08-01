<div class="container mx-auto py-16 px-8">
    <div class="mb-4">
        <input type="text" wire:model.lazy="search" placeholder="Search for products...">
        <table class="w-full table-auto">
            <thead>
                <tr>
                    <th class="px-3 py-2 text-left border-b-2 bg-gray-100">ID</th>
                    <th class="px-3 py-2 text-left border-b-2 bg-gray-100">Image</th>
                    <th class="px-3 py-2 text-left border-b-2 bg-gray-100">Title</th>
                    <th class="px-3 py-2 text-left border-b-2 bg-gray-100">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="px-3 py-2 border-b">{{$product->id}}</td>
                        <td class="px-3 py-2 border-b"><img src="{{$product->image}}" class="w-16"></td>
                        <td class="px-3 py-2 border-b">{{$product->title}}</td>
                        <td class="px-3 py-2 border-b">{{$product->price}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{$products->links()}}
    </div>
</div>
