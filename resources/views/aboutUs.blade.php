@extends('layout')
@section('main')

     <div class="absolute top-30 right-1 md:right-10 lg:right-20 xl:right-32 overflow-hidden z-0">
        <img src="{{ asset('storage/images/twine.png') }}" alt="decorative" class="opacity-60 w-[100px] lg:w-[200px] xl:w-[400px]">
    </div> 

   <div>
    <div class="flex flex-col gap-5 justify-center items-start p-6 md:p-12 max-w-[900px] mx-auto mb-10 mt-10 mb:mt-0 md:mb-10">
        <h1 class="text-[28px] sm:text-[36px] md:text-[52px] lg:text-[74px] font-bold max-w-[90%] md:max-w-[800px]">Equipping explorers, forged for survival.</h1>
        <p class="text-[16px] md:text-[18px] opacity-60 max-w-[700px]">We’re dedicated to crafting gear that inspires confidence, adapts to any challenge, and stands the test of time.</p>
        <a href="/contact" class="py-3 px-7 bg-(--button-color) hover:bg-white hover:text-black font-bold rounded-lg select-none duration-100">Contact</a>
        <p class="text-[12px] opacity-60">If you have questions or need any general information</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 items-center justify-center max-w-5xl mx-auto p-4 mb-20">
        <div class="flex flex-col items-center gap-3 text-center">
            <span class="bg-(--bg-white) p-2 rounded-sm items-center justify-center w-max">
                <x-tabler-tools class="w-8 h-8"/>
            </span>
            <span class="font-bold">4+</span>
            <p>Crafting survival gear</p>
        </div>

        <div class="flex flex-col items-center gap-3 text-center">
            <span class="bg-(--bg-white) p-2 rounded-sm items-center justify-center w-max">
                <x-iconpark-tentbanner-o class="w-8 h-8" />
            </span>
            <span class="font-bold">5300+</span>
            <p>Happy explorers</p>
        </div>

        <div class="flex flex-col items-center gap-3 text-center">
            <span class="bg-(--bg-white) p-2 rounded-sm items-center justify-center w-max">
                <x-bx-world class="w-8 h-8"/>
            </span>
            <span class="font-bold">50+ Countries</span>
            <p>Gear shipped worldwide</p>
        </div>

        <div class="flex flex-col items-center gap-3 text-center">
            <span class="bg-(--bg-white) p-2 rounded-sm items-center justify-center w-max">
                <x-bi-check class="w-8 h-8"/>
            </span>
            <span class="font-bold">98%</span>
            <p>Customer satisfaction</p>
        </div>
    </div>

    <div class="mx-auto flex flex-col xl:flex-row items-center xl:items-start justify-center gap-8 p-6 mb-30">
        <img src="{{ asset('storage/images/about.jpg') }}" alt="about-hero" class="w-[500px] md:w-[800px] object-cover brightness-75 opacity-80">
        <div class="flex flex-col gap-4 md:max-w-2xl xl:max-w-md">
            <h2 class="text-[24px] md:text-[42px] font-bold">For those who chase horizons and embrace the unknown.</h2>
            <p class="text-[18px]">Our mission is to craft gear that adapts, protects, and stands the test of time — supporting explorers in every journey, no matter where it leads.</p>
        </div>
    </div>

    <div class="mb-30">
        <div class="flex flex-col text-center justify-center items-center gap-4 mt-20 mb-10">
            <h3 class="text-[28px] sm:text-[36px] md:text-[52px] lg:text-[74px] font-bold">Why choose us</h3>
            <p class="text-[16px] md:text-[18px] opacity-60 max-w-[90%] md:max-w-[800px]">We build gear for those who refuse to give up — crafted to perform, adapt, and protect when the elements turn against you. Because survival isn’t luck — it’s preparation.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 container mx-auto p-4">
            <div class="relative flex flex-col gap-2 bg-(--gray-color-2) p-4">
                <span class="absolute -top-2.5 bg-(--bg-white) p-2 rounded-sm items-center justify-center w-max">
                    <x-bi-shield-fill class="w-8 h-8 text-(--icon-color)"/>
                </span>
                <div class="flex flex-col gap-2 mt-10">
                    <h4 class="font-semibold">Built to Endure</h4>
                    <p>Our gear is crafted from premium materials, rigorously tested to withstand the harshest conditions and last for years.</p>
                </div>
            </div>  

            <div class="relative flex flex-col gap-2 bg-(--gray-color-2) p-4">
                <span class="absolute -top-2.5 bg-(--bg-white) p-2 rounded-sm items-center justify-center w-max">
                    <x-entypo-compass class="w-8 h-8 text-(--icon-color)"/>
                </span>
                <div class="flex flex-col gap-2 mt-10">
                    <h4 class="font-semibold">Designed for Exploration</h4>
                    <p>Every product is thoughtfully engineered to help explorers adapt, navigate, and thrive in any environment.</p>
                </div>
            </div>

            <div class="relative flex flex-col gap-2 bg-(--gray-color-2) p-4">
                <span class="absolute -top-2.5 bg-(--bg-white) p-2 rounded-sm items-center justify-center w-max">
                    <x-bi-lightning-charge-fill class="w-8 h-8 text-(--icon-color)"/>
                </span>
                <div class="flex flex-col gap-2 mt-10">
                    <h4 class="font-semibold">Innovation in Action</h4>    
                    <p>We combine cutting-edge technology with practical design, ensuring gear that performs when it matters most.</p>
                </div>
            </div>

            <div class="relative flex flex-col gap-2 bg-(--gray-color-2) p-4">
                <span class="absolute -top-2.5 bg-(--bg-white) p-2 rounded-sm items-center justify-center w-max">
                    <x-ri-tools-fill class="w-8 h-8 text-(--icon-color)"/>
                </span>
                <div class="flex flex-col gap-2 mt-10">
                    <h4 class="font-semibold">Trusted by Adventurers</h4>
                    <p>Our equipment is relied on by explorers worldwide who demand durability, reliability, and performance in every journey.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col xl:flex-row gap-4 md:gap-8 justify-center items-center p-4 mb-40 mt-10">
        <div class="flex flex-col gap-1 max-w-[600px]">
            <h4 class="font-bold text-[32px] md:text-[52px]">The most popular questions</h4>
            <span class="font-bold text-[32px] md:text-[52px]">We got you.</span>
            <p class="text-[18px] mt-5">Curious about our gear? Check out our most common questions — quick answers to help you explore with confidence.</p>
        </div> 


        <div class="flex flex-col justify-center gap-8 items-center max-w-[800px] border-[0.1px] p-4 mt-10">
            <div x-data="{openQuestion: false}" x-transition x-cloak class="w-[400px] md:w-[800px] px-4">
                <div class="flex flex-row items-center justify-between opacity-70 hover:opacity-100 hover:border-b-[0.1px] cursor-pointer">
                    <div>
                        <h4 class="text-[18px] md:text-[24px]" @click="openQuestion = true ">
                            How long does delivery take?
                        </h4>
                    </div>

                    <div>
                         <x-heroicon-o-plus class="w-6 h-6"/>
                    </div>
                </div>

                <div x-show="openQuestion" class="bg-(--gray-color-3)">
                    <p @click="openQuestion = false" class="mt-5 p-2">
                        • Standard delivery usually takes 5–10 business days worldwide. Expedited shipping options are available at checkout.
                    </p>
                </div>
            </div>

            <div x-data="{openQuestion: false}" x-transition x-cloak class="w-[400px] md:w-[800px] px-4">
                <div class="flex flex-row items-center justify-between opacity-70 hover:opacity-100 hover:border-b-[0.1px] cursor-pointer">
                    <div>
                        <h4 @click="openQuestion = true" class="text-[18px] md:text-[24px]">
                            Can I return or exchange a product?
                        </h4>
                    </div>
                    <div>
                        <x-heroicon-o-plus class="w-6 h-6"/>
                    </div>
                </div>
                 

                <div x-show="openQuestion" class="bg-(--gray-color-3)">
                    <p @click.away="openQuestion = false" class="mt-5 p-2">
                         • Yes! We offer a 30-day return policy for unused items. Exchanges and refunds are handled quickly and easily.
                    </p>
                </div>
            </div>

              <div x-data="{openQuestion: false}" x-cloak class="w-[400px] md:w-[800px] px-4">
                <div class="flex flex-row items-center justify-between opacity-70 hover:opacity-100 hover:border-b-[0.1px] cursor-pointer">
                    <div>
                        <h4 @click="openQuestion = true" class="text-[18px] md:text-[24px]">
                            Are your products durable and water-resistant?
                        </h4>
                    </div>

                    <div>
                         <x-heroicon-o-plus class="w-6 h-6"/>
                    </div>
                </div>

                <div x-show="openQuestion" class="bg-(--gray-color-3)">
                    <p @click="openQuestion = false" class="mt-5 p-2">
                        • Absolutely. All gear is crafted from premium materials and rigorously tested to withstand extreme conditions.
                    </p>
                </div>
            </div>

              <div x-data="{openQuestion: false}" x-cloak class="w-[400px] md:w-[800px] px-4">
                <div class="flex flex-row items-center justify-between opacity-70 hover:opacity-100 hover:border-b-[0.1px] cursor-pointer">
                    <div>
                        <h4 @click="openQuestion = true" class="text-[18px] md:text-[24px]">
                            How do I clean and maintain my gear?
                        </h4>
                    </div>

                    <div>
                        <x-heroicon-o-plus class="w-6 h-6"/>
                    </div>
                </div>

                <div x-show="openQuestion" class="bg-(--gray-color-3)">
                    <p @click="openQuestion = false" class="mt-5 p-2">
                        • Wipe down with a damp cloth for daily cleaning. For deeper cleaning, follow the care instructions included with each product.
                    </p>
                </div>
            </div>

              <div x-data="{openQuestion: false}" x-cloak class="w-[400px] md:w-[800px] px-4">
                <div class="flex flex-row items-center justify-between opacity-70 hover:opacity-100 hover:border-b-[0.1px] cursor-pointer">
                    <div>
                        <h4 @click="openQuestion = true" class="text-[18px] md:text-[24px]">
                            Do you offer custom gear or engraving?
                        </h4>

                    </div>

                    <div>
                        <x-heroicon-o-plus class="w-6 h-6"/>
                    </div>
                </div>

                <div x-show="openQuestion" class="bg-(--gray-color-3)">
                    <p @click="openQuestion = false" class="mt-5 p-2">
                        • Yes, we provide custom options on select products. Contact our support team for details and pricing.
                    </p>
                </div>
            </div>
        </div>
    </div>

    
@endsection