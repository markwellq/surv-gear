<header class="mx-auto container">
        <div class="flex flex-col md:flex-row items-center justify-center gap-2 md:gap-32 lg:gap-64 xl:gap-102 p-3 border-b">
                <h1 class="text-[12px] md:text-[14px] font-semibold select-none">Official Survival Gear Adventure Gear</h1>
                <h1 class="text-[12px] md:text-[14px] font-semibold select-none">Free Shipping On All Orders</h1>
        </div>

        <div class="flex flex-row items-center justify-between p-10">
                <div>
                        <a href="/">
                                <img src="{{ asset('storage/images/Logo.png') }}"  alt="suv-gear-logo"
                                class="w-[90px] md:w-[120px] cursor-pointer">
                        </a>

                        <div class="flex md:hidden">
                                <button>
                                        
                                </button>
                        </div>
                </div>

                <div>
                        <ul class="hidden md:flex flex-row uppercase font-bold gap-10">
                                <li class="text-[12px] md:text-[16px]">
                                        <a href="#">Home</a>
                                </li>
                                <li class="text-[12px] md:text-[16px]">
                                        <a href="#" class="flex items-center gap-1">
                                                <span class="flex items-center">
                                                        Gear
                                                        <x-ri-arrow-down-s-line class="w-5 h-5 ml-1" />
                                                </span>
                                        </a>
                                </li>
                                <li class="text-[12px] md:text-[16px]">
                                        <a href="#">Contact</a>
                                </li>
                        </ul>
                </div>

                <div>
                        <ul class="flex flex-row gap-10">
                                 <li>
                                        <a href="/">
                                            <x-carbon-user class="w-8 h-8 cursor-pointer" />
                                        </a>
                                </li>
                                 <li>
                                        <button>
                                                <x-hugeicons-backpack-03 class="w-8 h-8 cursor-pointer" />
                                        </button>
                                </li>
                        </ul>
                </div>
        </div>
</header>