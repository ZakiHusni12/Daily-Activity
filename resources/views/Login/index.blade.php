@extends('layout.app')
@section('content')
<div class="w-screen h-screen flex justify-center items-center">
    <div>
        <img src="{{ asset('asset/img/logo.jpeg') }}" alt="">
        <div class="flex">
            {{-- untuk form --}}
            <form class="p-4">
                <div class="font-bold text-[52px]">
                    Daily Activity
                </div>
                <div class="font-thin text-[18px] mb-5">
                    This website helps agents efficiently fill in their shift reports.
                </div>

                <div class="w-full">
                    <div class="mb-3">
                        <label for="username" class="font-semibold text-[18px]">Username</label>
                        <input type="text" id="username" class="w-full border border-black p-3 mt-2 rounded-lg bg-gray-100">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="font-semibold text-[18px]">Password</label>
                        <input type="password" id="password" class="w-full border border-black p-3 mt-2 rounded-lg bg-gray-100">
                    </div>
                    <div>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow-lg">
                            Login
                        </button>
                    </div>
                </div>
            </form>
            {{-- untuk gambar --}}
            <div>
                <img src="{{ asset('asset/img/login page.jpg') }}" class="w-[500px]" alt="">
            </div>
        </div>
    </div>
</div>
@endsection