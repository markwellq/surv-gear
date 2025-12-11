@extends('layout')
@section('main')
<div class="mx-auto container py-8 px-4 mb-20">
    <div class="flex flex-col items-center justify-center mb-10">
        <div class="flex flex-row items-center gap-4">
            <p class="text-[14px] md:text-[18px] font-semibold">Admin board</p>
        </div>
    </div>

    @if ($errors->any())
        <div class="text-red-500 p-4 mb-4 flex items-center justify-center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('message'))
        <div class="text-green-500 p-4 mb-4 flex items-center justify-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="flex flex-col items-center justify-center">
        <div class="bg-white p-6 flex flex-col items-center justify-center gap-4 max-w-md w-full">
            <h2 class="text-xl font-bold mb-4">Add Product</h2>
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                @csrf

                <input name="name" type="text" placeholder="Name"
                       class="w-full p-3 border rounded-md">

                <select name="category_id"
                        class="w-full p-3 border rounded-md">
                    <option value="">Select category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                <input name="slug" type="text" placeholder="Slug" class="w-full p-3 border rounded-md">
                <input name="price" type="number" placeholder="Price" class="w-full p-3 border rounded-md">
                <input name="discount" type="number" placeholder="Discount (true or false)" class="w-full p-3 border rounded-md">
                <input name="discount_price" type="number" placeholder="Discount Price" class="w-full p-3 border rounded-md">
                <input name="short_desc" type="text" placeholder="Short description" class="w-full p-3 border rounded-md">
                <input name="short_desc_2" type="text" placeholder="Short description 2" class="w-full p-3 border rounded-md">
                <textarea name="description" placeholder="Main description" class="w-full p-3 border rounded-md"></textarea>
                <input type="file" name="image" class="w-full p-2 border rounded-md">

                <button type="submit"
                        class="mt-2 cursor-pointer py-2 hover:border-b-[0.1px] px-6 border-black font-semibold">
                    Adding
                </button>
            </form>
        </div>

    </div>

    <div class="mt-10 bg-white p-6 flex flex-col items-center justify-center">
        <h2 class="text-xl font-bold mb-4">All products</h2>
       <div class="w-full">
            <div class="border-b font-semibold flex gap-4 p-2">
                <div class="flex-1">Name</div>
                <div class="flex-1">Category</div>
                <div class="flex-1">Price</div>
                <div class="flex-1">Discount</div>
                <div class="w-24">Actions</div>
            </div>
            
            @foreach ($products as $product)
            <div class="border-b flex gap-4 p-2 items-center">
                <div class="flex-1">{{ $product->name }}</div>
                <div class="flex-1">{{ $product->category->name ?? '-' }}</div>
                <div class="flex-1">${{ $product->price }}</div>
                <div class="flex-1">{{ $product->discount ? '1' : '0' }}</div>
                <div class="w-24">
                    <form action="{{ route('admin.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button class="bg-red-400 hover:bg-white hover:text-black cursor-pointer border-[0.1px] text-white py-1 px-3">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection

{{-- To commit --}}