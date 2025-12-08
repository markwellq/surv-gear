@extends('layout')
@section('main')
    <div class="mx-auto container mb-60 mt-25 px-4">
        <div class="flex flex-col-reverse lg:flex-row mx-auto items-center justify-center max-w-sm lg:max-w-4xl bg-white">

            <div class="flex-1 hidden lg:flex justify-center">
                <img src="{{ asset('storage/images/auth-img.jpg') }}" alt="auth-image"
                 class="w-full object-cover h-[600px]">
            </div>

            <div class="flex-1 flex-col items-center justify-center w-full max-w-sm p-4 gap-4">
                <div class="flex items-center justify-center mb-4">
                    <p class="text-[24px] font-bold">Login</p>
                </div>
                <form action="{{route('loginPost')}}" method="post" class="flex flex-col gap-4">
                    @csrf
                    <input type="email" name="email" placeholder="Email" class="px-4 py-2 border rounded-sm">
                    @error('email')
                    <p class="text-red-400">{{$message}}</p>
                    @enderror
                    <input type="password" name="password" placeholder="Password" class="px-4 py-2 border rounded-sm">
                    @error('password')
                    <p class="text-red-400">{{$message}}</p>
                    @enderror 
                    <button type="submit" class="font-semibold opacity-70 hover:opacity-100 hover:border-b-[0.1px] cursor-pointer">
                        Login In
                    </button>
                    
                    <div class="flex flex-col items-center justify-center mt-0 lg:mt-40">
                        <p class="font-semibold"> 
                            Don't have an account?
                        </p>
                        <a href="/register" class="opacity-70 hover:opacity-100 hover:border-b-[0.1px]">
                            Register 
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection