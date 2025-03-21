<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div id="app">
        <header class="bg-white shadow">
            <div class="container mx-auto px-4 py-6 flex justify-between items-center">
                <a href="/" class="text-2xl font-bold text-gray-900">Fashion Blog</a>
                <nav class="space-x-4">
                    <a href="/" class="text-gray-700 hover:text-gray-900">Home</a>
                    <a href="/about" class="text-gray-700 hover:text-gray-900">About</a>
                    <a href="/contact" class="text-gray-700 hover:text-gray-900">Contact</a>
                    <a class="text-gray-700 hover:text-gray-900" href="/blog">Blog</a>
                    <a class="text-gray-700 hover:text-gray-900" href="{{ url('/upcoming-drops') }}">Upcoming Drops</a>
                    @guest
                        <a class="text-gray-700 hover:text-gray-900" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="text-gray-700 hover:text-gray-900" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="text-gray-700 hover:text-gray-900"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <main class="container mx-auto px-4 py-8">
            @yield('content')
        </main>

        <footer class="bg-gray-900 text-white py-6 mt-12">
            <div class="container mx-auto text-center">
                <p>&copy; {{ date('Y') }} Fashion Blog. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>
</html>
