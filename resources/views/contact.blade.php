@extends('layout')
@section('main')
    <div class="flex flex-col md:flex-row justify-center p-4 md:p-10 mb-45 mt-45">
        <div>
            <h1 class="text-[42px] md:text-[70px] uppercase w-full font-bold">Contact us</h1>
        </div>

        <div class="mt-10 md:mt-40">
            <div class="w-auto xl:w-[800px]">
                <p class="mb-10 md:mb-10 font-bold">
                    If you have questions or need any general information, please reach out to our team via the contact details provided.
                </p>
                <div class="flex flex-col gap-4 p-2">
                    <input type="text" name="email" placeholder="Email" class="px-4 py-2 border rounded-sm">
                    <input type="text" name="name" placeholder="Name" class="px-4 py-2 border rounded-sm">
                    <textarea name="message" placeholder="Message" class="px-4 py-2 border rounded-sm w-full h-32 resize-none"></textarea>
                    
                    <button class="font-semibold opacity-70 hover:opacity-100 hover:border-b-[0.1px] cursor-pointer w-[100px]">
                        Send
                    </button>
                </div>
            </div>
            
            <div class="border-b-[1px] mb-5">
                
            </div>
            <div class="flex flex-row gap-20">
                <div class="flex flex-col gap-4">
                    <h2 class="font-semibold">General Enquires</h2>
                    <p>
                        <span class="font-bold py-10">Billy Bean,</span>
                        <br>
                        <span class="font-semibold text-[13px]">
                            Tactical Gear Expert <br> & Product Development Advisor
                        </span>
                    </p>
                    <p>
                        <span class="font-bold">Phone</span>
                        <br>    
                        <span>+1 (212) 555-1234</span>
                    </p>
                    <p>
                        <span class="font-bold">Email</span>
                        <br>    
                        <span>survgear.support@gmail.com</span>
                    </p>
                </div>  

                <div class="flex flex-col gap-4">
                    <h2 class="font-semibold">
                        Social Media
                    </h2>

                    <div>
                        <ul class="flex flex-row gap-2">
                            <li class="w-6 h-6 hover:translate-y-[-3px] transition-all duration-200">
                                <a href="https://www.facebook.com/"><x-entypo-facebook /> </a>
                            </li>

                            <li class="w-6 h-6 hover:translate-y-[-3px] transition-all duration-200">
                                <a href="https://www.instagram.com/"><x-ri-instagram-fill /></a>
                            </li>

                            <li class="w-6 h-6 hover:translate-y-[-3px] transition-all duration-200">
                                <a href="https://www.twitter.com/"><x-forkawesome-twitter-square /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection