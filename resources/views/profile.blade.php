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
                        <a href="/logout" class="text-(--text-black) cursor-pointer hover:border-b-[0.1px] hover:text-red-300 text-[18px]">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection