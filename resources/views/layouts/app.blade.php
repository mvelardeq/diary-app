<!DOCTYPE html>
<html class="h-screen" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DiaryApp | @yield('title')</title>

        <!-- Fonts -->
        @vite('resources/css/app.css')
        @yield('scripts')
    </head>
    <body class="bg-gray-300 h-full flex flex-col justify-between">
        <header class="py-2 px-3 bg-white shadow-md mb-6">
            <nav class="flex justify-between items-center">
                <div>
                    <img src="{{ asset('images/logos/logo.png') }}" class="h-12" alt="">
                </div>
                <ul class="flex justify-end gap-5">
                    <li><a href="{{ asset(route('memories.index')) }}" class="cursor-pointer {{ request()->is('/') ? 'text-indigo-500' : ''}}">Home</a></li>
                    <li><a href="{{ asset(route('memories.create')) }}" class="cursor-pointer {{ request()->is('memories/create') ? 'text-indigo-500' : ''}}">Make a Memory</a></li>
                    <li>
                        <form action="{{ asset(route('logout')) }}" method="POST">
                            @csrf
                            <input type="submit" value="Logout" class="cursor-pointer">
                        </form>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="px-3 mx-auto w-full md:container md:px-0 h-full">
            @yield('content')
        </main>
        <footer class="px-3 h-auto py-5 bg-white shadow-md">
            <p>My footer</p>
        </footer>
    </body>
</html>
