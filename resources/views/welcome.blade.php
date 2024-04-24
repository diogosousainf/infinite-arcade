<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Arcade - Your Ultimate Game Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
        }
        .header-bg {
            background-image: url('https://ideogram.ai/api/images/direct/K4rcKPa-SViGS7VwYLLRug.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
        }
        .header-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .cta-btn {
            background-color: #DB2777;
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .cta-btn:hover {
            background-color: #BE185D;
        }
        /* Dropdown */
        .dropdown {
            position: relative;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            z-index: 999;
            min-width: 160px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            padding: 8px 0;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-item {
            display: block;
            padding: 8px 16px;
            color: #333333;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .dropdown-item:hover {
            background-color: #f4843f;
        }
        /* Melhorias visuais na seção de recursos */
        .feature-card {
            background-color: #FFF;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }
        /* Footer */
        footer {
            background-color: #1f2937;
            color: #cbd5e0;
        }
        .footer-links a {
            color: #cbd5e0;
            transition: color 0.3s ease;
        }
        .footer-links a:hover {
            color: #ffffff;
        }
        .footer-social a {
            color: #cbd5e0;
            transition: color 0.3s ease;
        }
        .footer-social a:hover {
            color: #ffffff;
        }
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes scaleIn {
            from {
                transform: scale(0.9);
            }
            to {
                transform: scale(1);
            }
        }
        @keyframes slideInLeft {
            from {
                transform: translateX(-20px);
            }
            to {
                transform: translateX(0);
            }
        }
        @keyframes slideInRight {
            from {
                transform: translateX(20px);
            }
            to {
                transform: translateX(0);
            }
        }
        .animated {
            animation-duration: 0.8s;
            animation-fill-mode: both;
        }
        .fadeInUp {
            animation-name: fadeInUp;
        }
        .scaleIn {
            animation-name: scaleIn;
        }
        .slideInLeft {
            animation-name: slideInLeft;
        }
        .slideInRight {
            animation-name: slideInRight;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Navigation Bar -->
<nav class="bg-gradient-to-r from-red-500 to-yellow-500 shadow-md fixed top-0 w-full z-10 bg-opacity-75 nav-shadow">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <a class="text-2xl font-bold text-white flex items-center transition duration-300 hover:text-gray-200" href="/">
                <img src="{{URL::asset('/images/logo-removebg-preview.png')}}" class="h-27 w-40 mr-2" >
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

<!-- Header Section with Background Image -->
<div class="header-bg bg-cover bg-center py-32 px-6 relative">
    <div class="header-overlay"></div>
    <div class="container mx-auto text-center relative animated fadeInUp">
        <h1 class="text-5xl font-bold text-white mb-6">Welcome to Infinite Arcade</h1>
        <p class="text-xl text-white mb-8">Discover and buy the latest games with ease.</p>
        <a href="/games" class="cta-btn inline-block">Explore Games</a>
    </div>
</div>

<!-- Features Section -->
<div class="container mx-auto mt-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
        <div class="bg-white p-8 rounded-lg shadow-md flex items-center animated scaleIn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-500 mr-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v1h2a1 1 0 011 1v2h2a1 1 0 011 1v4a1 1 0 01-1 1h-1v1a1 1 0 01-1 1H6a1 1 0 01-1-1v-1H4a1 1 0 01-1-1V9a1 1 0 011-1h2V5a1 1 0 011-1h2V4a1 1 0 011-1zM6 7v10h8V7H6z" clip-rule="evenodd"/>
            </svg>
            <div>
                <h2 class="text-2xl font-bold mb-4">Wide Selection</h2>
                <p class="text-gray-700">Explore a vast library of games across all genres.</p>
            </div>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md flex items-center animated scaleIn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-500 mr-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3 4a2 2 0 012-2h10a2 2 0 012 2v2a2 2 0 01-2 2h-1v6a2 2 0 01-2 2H8a2 2 0 01-2-2v-6H5a2 2 0 01-2-2V4zm3 8h8v4H6v-4zm2-6v2h4V6H8z" clip-rule="evenodd"/>
            </svg>
            <div>
                <h2 class="text-2xl font-bold mb-4">Secure Checkout</h2>
                <p class="text-gray-700">Shop confidently with our secure payment system.</p>
            </div>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md flex items-center animated scaleIn">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-500 mr-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v1h2a1 1 0 011 1v2h2a1 1 0 011 1v4a1 1 0 01-1 1h-1v1a1 1 0 01-1 1H6a1 1 0 01-1-1v-1H4a1 1 0 01-1-1V9a1 1 0 011-1h2V5a1 1 0 011-1h2V4a1 1 0 011-1zM6 7v10h8V7H6z" clip-rule="evenodd"/>
            </svg>
            <div>
                <h2 class="text-2xl font-bold mb-4">Instant Delivery</h2>
                <p class="text-gray-700">Get instant access to your purchased games.</p>
            </div>
        </div>
    </div>
</div>

<!-- Categories Section -->
@component('components.category.cards.cards')
@endcomponent

<!-- Footer Section -->
<footer class="py-12 mt-10">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About Us -->
            <div class="animated slideInLeft">
                <h3 class="text-lg font-bold mb-4">About Us</h3>
                <p class="text-sm">Infinite Arcade is your ultimate destination for discovering and purchasing the latest and greatest games.</p>
            </div>
            <!-- Quick Links -->
            <div class="animated fadeInUp">
                <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <!-- Social Links -->
            <div class="animated slideInRight">
                <h3 class="text-lg font-bold mb-4">Follow Us</h3>
                <ul class="footer-social">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">YouTube</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
