<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach($products as $product)
        <a href="{{ route('show-product', $product->slug) }}">
             <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-32 h-32 object-cover">
             <p>{{ $product->name }}</p>
             <p>{{ $product->price }}$</p>
             <p>Homeproducts</p>
        </a>

    @endforeach
</div>
