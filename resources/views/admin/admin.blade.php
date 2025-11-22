<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<section class="container mx-auto max-w-md p-4">

    <div class="flex flex-col items-center justify-center">
       <div class="flex flex-row gap-4 items-center justify-center">
           <img src="{{ asset('storage/images/Logo-black.png') }}"  alt="suv-gear-logo"
           class="w-[90px] md:w-[120px] cursor-pointer hover:scale-102 duration-100">

           <p class="text-[12px] md:text-[18px]">Admin rights</p>
       </div>

        <div class="flex flex-col items-center justify-center gap-2 py-20">
            <a href="/" class="text-[14px] hover:border-b-[0.1px] p-1">back to home</a>
            <p class="text-[12px]">create product to gear</p>
        </div>

        <div>
            <form action="/admin" method="POST" enctype="multipart/form-data" class="flex flex-col gap-2">
                @csrf
                <input name="name" type="text" placeholder="Name" class="w-full p-2 border-[0.1px]">

                <select name="category_id" class="w-full p-2 border-[0.1px]">
                    <option value="">Select category</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                </select>

                <input name="slug" type="text" placeholder="Slug" class="w-full p-2 border-[0.1px]">
                <input name="price" type="number" placeholder="Price" class="w-full p-2 border-[0.1px]">
                <input name="discount" type="number" placeholder="Discount (true or false)" class="w-full p-2 border-[0.1px]">
                <input name="discount_price" type="number" placeholder="Discount Price" class="w-full p-2 border-[0.1px]">
                <input name="short_desc" type="text" placeholder="Short description" class="w-full p-2 border-[0.1px]">
                <input name="short_desc_2" type="text" placeholder="Short description 2" class="w-full p-2 border-[0.1px]">
                <textarea name="description" placeholder="Main description" class="w-full p-2 border-[0.1px]"></textarea>

                <input type="file" name="image" class="w-full p-2 border-[0.1px]">
                

                <button type="submit" class="mt-5 cursor-pointer py-2 hover:border-b-[0.1px] px-6 border-white hover:bg-white/10">
                    Add product
                </button>
            </form>

            @if ($errors->any())
                <div class="text-red-500 p-2 mb-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @if(session('message'))
                <div class="text-green-500 p-2 mb-2">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
</section>