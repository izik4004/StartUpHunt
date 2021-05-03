<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('StartUp|Hunt') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-white border-b border-gray-100 py-3">
            <div class="max-w-6xl mx-auto flex justify-between items-center">
                <div>
                    <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo-600 no-underline">
                        {{ ('StartUp|Hunt') }}
                    </a>
                </div>
                <ul class="flex items-center hidden space-x-8 lg:flex">
            <!----    <li><a href="{{ route('startup.index') }}" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-indigo-400 ">Startup</a></li>  -------->
                <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-indigo-400 ">Features</a></li>
                <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-indigo-400 ">About us</a></li>
                </ul>
                <nav class="space-x-4 text-teal-800 text-sm sm:text-base justify-start">
                                       
                    @guest
                        <a class="border px-3 py-2 text-sm font-semibold rounded-md bg-white text-indigo-500 no-underline hover:bg-gray-100" href="{{ route('login') }}">{{ __('Log in') }}</a>
                        @if (Route::has('register'))
                            <a class="border px-3 py-2 text-sm font-semibold rounded-md bg-indigo-500 text-white no-underline hover:bg-indigo-700" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>
                        <a href="{{ route('startup.create') }}"><button class="px-4 py-2 border border-indigo-500">Post</button></a>
                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>

        <div class="max-w-6xl mx-auto">
        @yield('content')
        </div>

        <div>
            
        </div>
    </div>
</body>
</html>
