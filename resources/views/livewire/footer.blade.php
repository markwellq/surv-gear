<footer class="relative bg-(--bg-black) text-white max-w-[1200px] h-[450px] sm:h-[500px] mx-auto py-4 xl:rounded-md xl:mt-4 xl:mb-4">
    <div class="flex flex-col justify-between gap-20 p-8 z-40">
        <div class="flex flex-row xl:flex-row justify-between gap-4">
            <div class="flex flex-col gap-4">
                <a href="/">
                    <img src="{{ asset('storage/images/Logo-white.png') }}"  alt="suv-gear-logo"
                    class="w-[90px] md:w-[120px] cursor-pointer hover:scale-102 duration-100">
                </a>
                <p>My final project</p>
                <p>Build. Grow. Repeat.</p>
            </div>

            <div class="flex flex-row gap-8 lg:gap-15">
                <div class="flex flex-col gap-2">
                    <h3 class="py-[0.1px] px-2 bg-(--bg-white) font-bold rounded-sm text-(--text-black) text-[12px] sm:text-[24px]">Company</h3>
                    <ul class="flex flex-col gap-2 font-semibold text-[12px] sm:text-[18px]">
                        <li>
                            <a href="/gear">Products</a>
                        </li>
                        <li>
                            <a href="/aboutUs">About Us</a>
                        </li>
                        <li>
                            <a href="/contact">Contact</a>
                        </li>
                        <li>
                            <a href="/account">Account</a>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col gap-2">
                    <h3 class="py-[0.1px] px-2 bg-(--bg-white) font-bold rounded-sm text-(--text-black) text-[12px] sm:text-[24px]">Lorem</h3>
                    <ul class="flex flex-col gap-2 font-semibold text-[12px] sm:text-[18px]">
                        <li>
                            <a href="/">Lorem.</a>
                        </li>
                        <li>
                            <a href="/">Lorem.</a>
                        </li>
                        <li>
                            <a href="/">Lorem.</a>
                        </li>
                        <li>
                            <a href="/">Lorem.</a>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col gap-2">
                    <h3 class="py-[0.1px] px-2 bg-(--bg-white) font-bold rounded-sm text-(--text-black) text-[12px] sm:text-[24px]">Lorem</h3>
                    <ul class="flex flex-col gap-2 font-semibold text-[12px] sm:text-[18px]">
                        <li>
                            <a href="/">Lorem.</a>
                        </li>
                        <li>
                            <a href="/">Lorem.</a>
                        </li>
                        <li>
                            <a href="/">Lorem.</a>
                        </li>
                        <li>
                            <a href="/">Lorem.</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex flex-row gap-4">
            <span class="text-white w-8 md:w-12 hover:translate-y-[-3px] transition-all duration-200">
                <x-fontisto-visa />
            </span>
             <span class="text-white w-8 md:w-12 hover:translate-y-[-3px] transition-all duration-200">
                 <x-fontisto-apple-pay />
            </span>
            <span class="text-white w-8 md:w-12 hover:translate-y-[-3px] transition-all duration-200">
                <x-fontisto-paypal />
            </span>
            <span class="text-white w-8 md:w-12 hover:translate-y-[-3px] transition-all duration-200">
                <x-fontisto-discover />
            </span>
             <span class="text-white w-8 md:w-12 hover:translate-y-[-3px] transition-all duration-200">
                 <x-fontisto-mastercard />
            </span>
            <span class="text-white w-6 md:w-10 hover:translate-y-[-3px] transition-all duration-200">
                <x-fab-cc-amazon-pay /> 
            </span>
        </div>

        <div class="flex flex-row justify-between border-t-[0.1px] p-4">
            <div>
                <p>2025</p>
            </div>

            <div class="flex flex-row gap-8">
                <a href="/privacy" class="opacity-80 hover:opacity-100 hover:underline duration-150">
                    Privacy Policy
                </a>

                  <a href="/service" class="opacity-80 hover:opacity-100 hover:underline duration-150">
                    Terms of Service
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-10 left-[-400px] opacity-50 hidden lg:flex">
        <img src="{{ asset('storage/images/shape-tent.png') }}"  alt="shape-tent"
        class="w-[400px]">
    </div>

    <div class="absolute bottom-20 right-[-275px] opacity-50 z-[-1] hidden lg:flex">
        <img src="{{ asset('storage/images/backpack-shape.png') }}"  alt="backpack-tent"
        class="w-[350px]">
    </div>
</footer>