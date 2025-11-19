@extends('layout')

@section('main')

    <div class="mx-auto py-30 px-30">

        <div class="flex items-center justify-center">
            <div class="bg-white py-40 px-40">
                <div class="flex flex-col items-center justify-center gap-4">
                    <p>Welcome back, <span class="font-bold">{{ $user->name }}</span></p>
                    <a href="/logout" class="text-(--text-black) cursor-pointer hover:border-b-[0.1px] hover:text-red-300 text-[24px]">Logout</a>
                </div>
            </div>
        </div>
    </div>

@endsection