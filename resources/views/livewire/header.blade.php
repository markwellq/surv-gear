

<header x-data="{ open: false, openGear: false, openGearNav: false, openBackpack: false, openAccount: false }" class="sticky top-0 bg-white/95 z-30 h-[145px] shadow-sm">
        <div class="mx-auto container flex flex-col md:flex-row items-center justify-center gap-2 md:gap-32 lg:gap-64 xl:gap-102 p-2 border-b-[0.1px]">
             <h1 class="text-[12px] md:text-[14px] font-medium select-none">Official Survival Gear Adventure Gear</h1>
             <h1 class="text-[12px] md:text-[14px] font-medium select-none">Free Shipping On All Orders</h1>
        </div>

        <div x-data="{ open: false }" class="mx-auto container flex flex-row items-center p-4 justify-between text-(--font-color-black)">
                <div class="flex flex-row gap-4">
                     <div class="flex">
                        <button @click="open = true">
                           <img src="{{ asset('storage/images/compas.png') }}"  alt="compas"
                                 class="w-6 h-6 md:w-8 md:h-8 cursor-pointer hover:scale-102 duration-100 border-[0.1px] p-1 rounded-md shadow-md">
                        </button>
                     </div>      
                     <div>
                        <a href="/">
                           <img src="{{ asset('storage/images/Logo-black.png') }}"  alt="suv-gear-logo"
                           class="w-[90px] md:w-[120px] cursor-pointer hover:scale-102 duration-100">
                        </a>
                     </div>
                </div>

                <div>
                  <nav>
                     <ul class="hidden md:flex flex-row uppercase font-bold gap-10">
                        <li class="text-[12px] md:text-[16px]">
                           <a href="#" class="tracking-widest hover:text-(--gray-color) transition-colors duration-300">
                              Home
                           </a>
                        </li>
                        <li class="text-[12px] md:text-[16px]">
                           <a click="openGear=true" href="#" class="flex items-center gap-1">
                              <span @click="openGear = true" class="flex items-center tracking-widest hover:text-(--gray-color) transition-colors duration-300">
                                 Gear
                                 <x-ri-arrow-down-s-line class="w-5 h-5 ml-1" />
                              </span>
                           </a>
                        </li>
                        <li class="text-[12px] md:text-[16px]">
                           <a href="/contact" class="tracking-widest hover:text-(--gray-color) transition-colors duration-300">
                              Contact
                           </a>
                        </li>
                     </ul>
                  </nav>
                </div>

                <div>
                   <ul class="flex flex-row gap-10">
                      <li>
                        <button @click="openAccount=true">
                            <x-carbon-user class="w-8 h-8 cursor-pointer hover:scale-109 duration-300" />
                        </button>
                     </li>
                      <li>
                         <button @click="openBackpack=true">
                             <x-hugeicons-backpack-03 class="w-8 h-8 cursor-pointer hover:scale-109 duration-300" />
                         </button>
                     </li>
                   </ul>
                </div>

               <div x-show="openAccount" x-transition class="fixed inset-0">
                  <div class="absolute inset-0 bg-black/50">
                     <div  @click.away="openAccount = false" class="absolute w-[300px] h-[250px] md:w-[400px] bg-(--nav-color) right-0 top-[145px] shadow-md">
                        <div class="flex flex-col items-end gap-4 p-4">
                           <button @click="openAccount=false" class="w-12 h-12 cursor-pointer text-(--text-white) p-2 flex">
                              <x-bi-x class="w-10 h-10" />
                           </button>
                        </div>
                     </div>
                  </div>
                </div>

                <div x-show="openBackpack" x-transition class="fixed inset-0">
                  <div class="absolute inset-0 bg-black/50">
                     <div  @click.away="openBackpack = false" class="absolute w-[300px] h-full md:w-[400px] bg-(--nav-color) right-0 shadow-md">
                        <div class="flex flex-col items-end gap-4 p-4">
                           <button @click="openBackpack=false" class="w-12 h-12 cursor-pointer text-(--text-white) p-2">
                              <x-bi-x class="w-10 h-10" />
                           </button>
                        </div>
                     </div>
                  </div>
                </div>

                <div x-show="openGear" x-transition class="fixed inset-0">
                     <div class="absolute inset-0">
                        <div @click.away="openGear = false" class="absolute shadow-sm top-[150px] left-1/2 transform -translate-x-1/2 w-[400px] h-[170px] md:h-[50px] md:w-[550px] bg-(--bg-white) rounded-b-xl">
                           <div class="flex flex-row items-center justify-center gap-4">
                              <div>
                                 <nav class="flex flex-col items-center justify-center md:flex-row gap-2 md:gap-4 mt-3">
                                    @foreach ($categories as $category)
                                    <li class="font-bold">
                                       <a href="{{ route('show-category', $category->slug) }}" class="">
                                          {{ $category->name }}
                                       </a>
                                    </li>
                                    @endforeach
                                 </nav>
                              </div>
                           </div>
                        </div>
                     </div>
                </div>

                <div x-show="open, openGear" x-transition class="fixed inset-0">
                  <div class="absolute inset-0 bg-black/50">
                     <div @click.away="open = false" class="absolute w-[250px] h-full md:w-[400px] bg-(--nav-color) left-0 shadow-md">
                       <div class="flex flex-col gap-4 p-4">
                           <button @click="open=false" class="w-12 h-12 cursor-pointer text-(--text-white) p-2 flex justify-end">
                              <x-bi-x class="w-10 h-10" />
                           </button>
                           <nav class="flex flex-col gap-4 text-(--text-white) text-[24px]">
                              <ul class="flex flex-col gap-4 p-4">
                                 <li>
                                    <a href="/">Home</a>
                                 </li>
                                 <li>
                                    <a @click="openGearNav = true" href="#" class="flex flex-row gap-2 items-center">
                                       Gear
                                       <x-microns-right  class="w-4 h-4"/>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="/contact">Contact</a>
                                 </li>
                                    <li>
                                    <a href="/aboutUs">About us</a>
                                 </li>
                              </ul>
                           </nav>

                           <div x-show="openGearNav">
                                 <div class="absolute w-[250px] h-full md:w-[300px] bg-(--nav-color-2) md:left-[400px] top-0 shadow-md p-2">
                                    <div class="mt-4">
                                       <button @click="openGearNav=false" class="w-8 h-8 cursor-pointer text-(--text-white) flex justify-end">
                                          <x-tni-left-small-o class="w-8 h-8" />
                                       </button>
                                    </div>
                                    <nav class="flex flex-col items-left justify-center gap-2 md:gap-4 mt-10 px-2">
                                       @foreach ($categories as $category)
                                       <li class="font-bold text-(--text-white)">
                                          <a href="{{ route('show-category', $category->slug) }}" class="">
                                             {{ $category->name }}
                                          </a>
                                       </li>
                                       @endforeach
                                     </nav>
                                 </div>
                           </div>
                       </div>
                     </div>
                  </div>
                </div>
        </div>
</header>

