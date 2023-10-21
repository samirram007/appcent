<<<<<<< HEAD
{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
=======
<x-guest-layout>
    <form method="POST" action="{{ route('register',$package_id) }}">
>>>>>>> 17065e89bd8537505b4463ebe11dd3882bf6c37e
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 sr-only">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 sr-only">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('home')
@section('content')
    <div class="container py-5 d-flex justify-content-center" style="margin: auto">
        <div class="px-3 py-3 pt-3 bg-transparent register_form card register_card justify-content-center"
            style="width: 32rem">
            <div class="pb-4 text-center">
                <img src="{{ asset('logo.png') }}" class="register-card-logo" alt="...">
            </div>

            <div class="card-body">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="mb-4 form-group">
                        <input type="text"
                            class="text-white bg-transparent border shadow-none ps-1 rounded-0 form-control border-top-0 border-start-0 border-end-0"
                            name="name" id="exampleFormControlInput1" placeholder="Enter your username">
                    </div>
                    <div class="mb-4 form-group">
                        <input type="email"
                            class="text-white bg-transparent border shadow-none rounded-0 ps-1 form-control border-top-0 border-start-0 border-end-0"
                            name="name" id="exampleFormControlInput1" placeholder="Enter your email">
                    </div>
                    <div class="pt-3 mb-3 text-center">
                        <button class="register_btn w-100">Sign Up</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
