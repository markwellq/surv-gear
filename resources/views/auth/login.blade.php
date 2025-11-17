@extends('layout')
@section('main')
    <div class="mx-auto container py-8 mb-55">
        <div class="flex flex-col mx-auto items-center justify-center bg-white max-w-sm rounded-lg p-8 gap-8 shadow-lg">

            <div class="flex flex-row items-center gap-4 p-4">
                 <img src="{{ asset('storage/images/Logo-black.png') }}"  alt="suv-gear-logo"
                    class="w-[90px] md:w-20 h-full cursor-pointer hover:scale-102 duration-100">

                    <span class="font-bold text-[2]">&</span>

                  <img src="{{ asset('storage/images/compas.png') }}"  alt="compass"
                     class="w-10 md:w-[35px] h-full cursor-pointer hover:scale-102 duration-100">
            </div>


            <p class="text-[24px] font-bold">Login</p>
            <form action="{{route('registerPost')}}" method="post" class="flex flex-col gap-4">
                @csrf

                <input type="email" name="email" placeholder="Email" class="px-4 py-2 border rounded-sm">
                    @error('email')
                    value="{{old('email')}}"
                     <p class="text-red-400">{{$message}}</p>
                    @enderror
                <input type="password" name="password" placeholder="Password" class="px-4 py-2 border rounded-sm">
                    @error('password')
                     <p class="text-red-400">{{$message}}</p>
                      @enderror 
                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="px-4 py-2 border rounded-sm">
                     @error("password_confirmation")
                     <p class="text-red-400">{{ $message }}</p>
                     @enderror
                <button type="submit" class="font-semibold opacity-70 hover:opacity-100 hover:border-b-[0.1px]">
                    Login In
                </button>
                
                <div class="flex flex-col items-center justify-center">
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
@endsection