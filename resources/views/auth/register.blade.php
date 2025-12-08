@extends('layout')
@section('main')
    <div class="mx-auto container py-8 mb-55 mt-15">
        <div class="flex flex-col-reverse lg:flex-row mx-auto items-center justify-center max-w-sm lg:max-w-4xl bg-white">

            <div class="flex-1 hidden lg:flex justify-center">
                <img src="{{ asset('storage/images/reg-img.jpg') }}" alt="reg-image"
                 class="w-full object-cover h-[600px]">
            </div>

            <div class="flex-1 flex-col items-center justify-center w-full max-w-sm p-4 gap-4">
                <div class="flex items-center justify-center mb-4">
                    <p class="text-[24px] font-bold">Register</p>
                </div>
            <form action="{{route('registerPost')}}" method="post" class="flex flex-col gap-4">
                @csrf
                <span class="text-[14px] opacity-40">The name must contain at least 3 letters.</span>
                 <input type="text" name="name" placeholder="Username" class="px-4 py-2 border rounded-sm" value="{{old('name')}}">
                     @error('name')
                      <p class="text-red-400">{{$message}}</p>
                     @enderror
                <input type="email" name="email" placeholder="Email" class="px-4 py-2 border rounded-sm" value="{{old('email')}}">
                    @error('email')
                     <p class="text-red-400">{{$message}}</p>
                    @enderror
                    <span class="text-[14px] opacity-40">The password must contain at least 6 letters.</span>
                <input type="password" name="password" placeholder="Password" class="px-4 py-2 border rounded-sm">
                     @error('password')
                     <p class="text-red-400">{{$message}}</p>
                     @enderror 
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="px-4 py-2 border rounded-sm">
                    @error("password_confirmation")
                    <p class="text-red-400">{{ $message }}</p>
                    @enderror
                
                <button type="submit" class="font-semibold opacity-70 hover:opacity-100 hover:border-b-[0.1px] cursor-pointer">
                    Sign Up
                </button>
                
                <div class="flex flex-col items-center justify-center lg:mt-20">
                    <p class="font-semibold"> 
                        You have an account?
                    </p>
                    <a href="/login" class="opacity-70 hover:opacity-100 hover:border-b-[0.1px]">
                        Login in 
                    </a>
                </div>
             </div>
            </form>
        </div>
    </div>
@endsection