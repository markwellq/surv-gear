<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach($products as $product)
        <div class="p-4 transition">
            <img class="w-[400px] h-[300px]" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
            <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
            <p class="mt-2 font-semibold">{{ $product->price }} $</p>
        </div>
    @endforeach
</div>
