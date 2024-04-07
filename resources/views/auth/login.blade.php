<!DOCTYPE html>
<html class="h-screen" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My App Diary | Login</title>

        <!-- Fonts -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-300 h-full flex">
        <div class="bg-white w-11/12 sm:w-8/12 lg:w-9/12 mx-auto my-auto rounded-lg h-5/6 flex overflow-hidden">
            <div class="w-full lg:w-1/2 p-16">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <p class="text-center mb-9">Diary Login</p>
                    <p class="text-sm mb-9">Text your user and password</p>
                    @if (session('message'))
                        <p class="text-red-400 text-sm">{{ session('message') }}</p>
                    @endif
                    <div class="mt-5">
                        <input
                            name="email"
                            class="w-full p-2 rounded-md border @error('email') border-red-400 @enderror"
                            type="email"
                            placeholder="your email"
                            value="{{ old('email') }}"
                        >
                        @error('email')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <input
                            name="password"
                            class="w-full p-2 rounded-md border @error('password') border-red-400 @enderror"
                            type="password"
                            placeholder="your password"
                        >
                        @error('password')
                            <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <input class="w-full p-2 rounded-md bg-violet-300 cursor-pointer hover:bg-violet-400" type="submit" value="Login">
                    </div>
                </form>
                <div class="mt-3">
                    <p>Don't have an account? <a href="{{ asset(route('register')) }}" class="text-blue-400 hover:text-blue-500">Create an Account</a></p>
                </div>
            </div>
            <div class="hidden lg:flex lg:w-1/2 bg-violet-300 lg:justify-center lg:items-center">
                <img src="{{ asset('images/pictures/login-picture.png') }}" alt="Login picture">
            </div>
        </div>
    </body>
</html>
