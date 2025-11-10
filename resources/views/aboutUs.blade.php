@extends('layout')
@section('main')
    <div class="flex flex-col justify-center items-center mb-10 bg-white">
        <div class="relative w-full  overflow-hidden h-[400px]">
            <div class="absolute w-full h-full top-0">
                <img src="{{ asset('storage/images/crumb-1.webp') }}"  alt="crumb-1"
                class="absolute top-0 left-0 w-full z-30">
            </div>

            <div>
                <img src="{{ asset('storage/images/about-us-hero.jpg') }}"  alt="about-image"
                class="w-full object-cover overflow-hidden h-[600px] object-bottom z-10 brightness-60">
            </div>
                
            <div>
                <img src="{{ asset('storage/images/crumb-2.webp') }}"  alt="crumb-2"
                class="absolute bottom-0 left-0 w-full z-29">
            </div>

            <div class="absolute top-42 md:top-30 flex flex-col items-center inset-0">
                <h1 class="text-(--text-white) font-bold text-[30px] md:text-[60px] uppercase">About us</h1>
                <p class="text-(--text-white) font-medium text-[20px] md:text-[30px]">Our Story of Strength and Survival</p>
            </div>
        </div>

        <div class="mt-20 mb-20 shadow-2xl">
             <div class="w-[430px] md:w-[800px] bg-white p-2">
                <div class="p-4">
                    <div class="flex items-center justify-center p-10">
                           <img src="{{ asset('storage/images/Logo-black.png') }}"  alt="suv-gear-logo"
                           class="w-[90px] md:w-[120px]">
                     </div>
                    <p>
                        <span class="font-bold">Surv-Gear</span> was born out of a simple yet powerful idea — to create reliable, functional, and well-designed gear for people who refuse to stand still.
                        It all started with a group of outdoor enthusiasts, engineers, and survival-minded creators who shared one passion — the wild.
                        <br><br>    
                        Every adventure, every storm, and every night spent under the open sky taught us the same lesson: <span class="font-bold">gear should never fail you when it matters most.</span>
                        We realized that survival equipment on the market often fell short — it looked tactical, but lacked real-world durability and thought-out design.
                        That’s when the idea for Surv-Gear came to life.
                        <br><br>
                        Our mission became clear — to build gear that blends performance, endurance, and purpose.
                        Not just products, but tools that empower you to go further, stay safe, and adapt to the unexpected.
                        <br>
                        Each item we design is guided by three principles:
                        <hr class="mt-4">
                    </p>
                        <div class="flex flex-col gap-4 p-4">
                            <span class="font-bold">
                                ► Functionality
                            </span>
                            — every detail has a reason to exist.
                            <span class="font-bold">
                                ► Durability 
                            </span class="font-bold">
                            — built to survive the elements, time, and wear.
                             <span class="font-bold">
                                ► Authenticity
                            </span>
                            — because survival isn’t a trend, it’s a mindset.
                        </div>
                    <p>
                        Surv-Gear isn’t just about equipment — it’s about a way of thinking.
                        It’s for those who push forward when others stop. For those who choose to be prepared, not afraid.
                        <br><br>
                        From the quiet forests to the high mountains and concrete jungles — our gear is made to be with you everywhere.
                        Because survival isn’t about escaping danger — it’s about embracing life fully, on your own terms.
                        <br><br>
                        Welcome to <span class="font-bold">Surv-Gear</span> —
                        <span class="font-bold">
                            Built for survival. Designed for life.
                        </span>

                        <div class="flex flex-col items-center justify-center gap-10 p-10">
                            <img src="{{ asset('storage/images/about.png') }}"  alt="about"
                             class="w-[400px] opacity-80 hover:opacity-100 duration-200">
                             <a href="/" class="opacity-70 hover:opacity-100 hover:border-b-[0.1px]">
                                Back to home
                            </a>
                        </div>

                    </p>
                    </div>
            </div>
        </div>
    </div>
@endsection