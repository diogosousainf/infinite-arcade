<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<!-- Navigation Bar -->
<nav class="bg-gradient-to-r from-red-500 to-yellow-500 shadow-md">
    <div class="container mx-auto px-4 py-3">
        <div class="flex justify-between items-center">
            <a class="text-2xl font-bold text-white flex items-center transition duration-300 hover:text-gray-200" href="/">
                <svg class="h-10 w-10 fill-current mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 18.5L12 13 5.5 7.5z"/>
                </svg>
                Infinite Arcade
            </a>
            <div class="hidden md:flex items-center space-x-4 text-white">
                <a href="/" class="flex items-center hover:text-gray-200 transition duration-300">
                    <svg class="h-6 w-6 fill-current mr-1" viewBox="0 0 24 24">
                        <path d="M3.5 18.5L10 13 3.5 7.5z"/>
                    </svg>
                    Home
                </a>
                <a href="#" class="flex items-center hover:text-gray-200 transition duration-300">
                    <svg class="h-6 w-6 fill-current mr-1" viewBox="0 0 24 24">
                        <path d="M3.5 18.5L10 13 3.5 7.5z"/>
                    </svg>
                    Shop
                </a>
                <a href="#" class="flex items-center hover:text-gray-200 transition duration-300">
                    <svg class="h-6 w-6 fill-current mr-1" viewBox="0 0 24 24">
                        <path d="M3.5 18.5L10 13 3.5 7.5z"/>
                    </svg>
                    About
                </a>
                <a href="#" class="flex items-center hover:text-gray-200 transition duration-300">
                    <svg class="h-6 w-6 fill-current mr-1" viewBox="0 0 24 24">
                        <path d="M3.5 18.5L10 13 3.5 7.5z"/>
                    </svg>
                    Contact
                </a>
                <div class="dropdown">
                    <a href="#" class="hover:text-gray-200 transition duration-300 flex items-center">
                        <svg class="h-6 w-6 fill-current mr-1" viewBox="0 0 24 24">
                            <path d="M3.5 18.5L10 13 3.5 7.5z"/>
                        </svg>
                        <span>Account</span>
                    </a>
                    <div class="dropdown-menu">
                        @if (Auth::check())
                            <div class="py-2 px-4 text-gray-800">Welcome, {{ Auth::user()->name }}</div>
                            <a href="{{ route('profile-show') }}" class="dropdown-item">Profile</a>
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="md:hidden">
                <button class="text-white hover:text-gray-200 focus:outline-none transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
