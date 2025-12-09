@extends('layout')

@section('main')

    <div class="mx-auto py-55 px-30">

        <div class="flex items-center justify-center">
            <div class="bg-white py-10 px-10 md:py-10 md:px-10 h-full w-[320px]">
                <div class="flex flex-col items-center justify-center gap-4">
                    <div class="w-[100px] h-[100px]">
                        <img src="{{ asset('storage/images/avatar.webp') }}" alt="avatar"/>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-2 mt-10 w-full">
                        <p>Welcome back,
                             <span class="font-bold">{{ $user->name }}</span>
                        </p>
                        <p class="font-bold text-[12px]">Contact: {{ $user->email }}</p>
                        
                         <div class="mt-6 pt-6 border-t border-black">
                            <a href="/logout" class="flex items-center justify-center gap-2 text-red-600 hover:text-red-700 font-medium py-2 transition duration-200">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                </svg>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection