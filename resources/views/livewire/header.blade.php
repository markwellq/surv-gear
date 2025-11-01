

<header class="sticky top-0 bg-white/95 z-30 h-[145px] shadow-sm">
        <div class="mx-auto container flex flex-col md:flex-row items-center justify-center gap-2 md:gap-32 lg:gap-64 xl:gap-102 p-2 border-b-[0.1px]">
             <h1 class="text-[12px] md:text-[14px] font-medium select-none">Official Survival Gear Adventure Gear</h1>
             <h1 class="text-[12px] md:text-[14px] font-medium select-none">Free Shipping On All Orders</h1>
        </div>

        <div class="mx-auto container flex flex-row items-center p-4 justify-between text-(--font-color-black)">
                <div class="flex flex-row gap-4">
                     <div class="flex ">
                        <button>
                           <x-bytesize-menu class="w-6 h-6 cursor-pointer"/>
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
                   <ul class="hidden md:flex flex-row uppercase font-bold gap-10">
                       <li class="text-[12px] md:text-[16px]">
                               <a href="#" class="tracking-widest hover:text-(--gray-color) transition-colors duration-300">
                                Home
                                </a>
                       </li>
                       <li class="text-[12px] md:text-[16px]">
                          <a href="#" class="flex items-center gap-1">
                                  <span class="flex items-center tracking-widest hover:text-(--gray-color) transition-colors duration-300">
                                        Gear
                                     <x-ri-arrow-down-s-line class="w-5 h-5 ml-1" />
                                  </span>
                          </a>
                       </li>
                       <li class="text-[12px] md:text-[16px]">
                          <a href="#" class="tracking-widest hover:text-(--gray-color) transition-colors duration-300">
                                Contact
                          </a>
                       </li>
                   </ul>
                </div>

                <div>
                   <ul class="flex flex-row gap-10">
                      <li>
                         <a href="/">
                            <x-carbon-user class="w-8 h-8 cursor-pointer hover:scale-109 duration-300" />
                         </a>
                     </li>
                      <li>
                         <button>
                             <x-hugeicons-backpack-03 class="w-8 h-8 cursor-pointer hover:scale-109 duration-300" />
                         </button>
                     </li>
                   </ul>
                </div>
        </div>
</header>

