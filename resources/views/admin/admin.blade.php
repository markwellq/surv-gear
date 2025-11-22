<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<section class="container mx-auto max-w-md p-4">

    <div class="flex flex-col items-center justify-center">
       <div class="flex flex-row gap-4 items-center justify-center">
           <img src="{{ asset('storage/images/Logo-black.png') }}"  alt="suv-gear-logo"
           class="w-[90px] md:w-[120px] cursor-pointer hover:scale-102 duration-100">

           <p class="font-bold text-[12px] md:text-[18px]">Admin rights</p>
       </div>

        <div class="flex flex-col items-center justify-center gap-2 py-20">
            <a href="/" class="text-[14px] hover:border-b-[0.1px] p-1">back to home</a>
            <p class="text-[12px]">create product to gear</p>
        </div>

        <div>
            <form action="" method="POST" class="flex flex-col gap-2">
                @csrf
                <input wire:model="name" type="text" placeholder="Name" class="w-full p-2 border-[0.1px]">

                <select wire:model="category_id" class="w-full p-2 border-[0.1px]">
                    <option value="Select cattegory">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </option>
                </select>

                <input wire:model="slug" type="text" placeholder="Slug" class="w-full p-2 border-[0.1px]">
                <input wire:model="price" type="text" placeholder="Price" class="w-full p-2 border-[0.1px]">
                <input wire:model="short_desc" type="text" placeholder="Short description" class="w-full p-2 border-[0.1px]">
                <input wire:model="short_desc_2" type="text" placeholder="Short description 2" class="w-full p-2 border-[0.1px]">
                <textarea wire:model="description" placeholder="Main description" class="w-full p-2 border-[0.1px]"></textarea>

                <input type="file" wire:model="image" class="w-full p-2 border-[0.1px]">
                
                
                <button wire:click="createProduct" class="mt-5 cursor-pointer py-2 hover:border-b-[0.1px] px-6 border-white hover:bg-white/10">
                    Add product
                </button>
            </form>
        </div>
    </div>
</section>