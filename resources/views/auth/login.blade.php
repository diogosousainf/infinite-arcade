<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .login-bg {
            background-size: cover;
            background-position: center;
            background-image: url("https://images7.alphacoders.com/134/1343563.jpeg");
        }

        .min-h-screen {
            background-color: #F0F4F8;
            background-image: linear-gradient(135deg, #2C3E50 0%, #FD746C 100%);
        }

        .cardlogin {
            background-color: #FFFFFF;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .login-title {
            font-size: 2rem;
            font-weight: 700;
            color: #2C3E50;
            margin-bottom: 1.5rem;
        }

        .login-input {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #E5E7EB;
            padding: 1rem;
            transition: transform 0.3s ease-in-out;
        }

        .login-input:focus {
            outline: none;
            border-color: #FD746C;
            transform: scale(1.02);
        }

        .login-checkbox {
            color: #2C3E50;
        }

        .login-checkbox:hover {
            color: #FD746C;
        }

        .login-button {
            background-color: #FD746C;
            transition: background-color 0.3s ease-in-out;
        }

        .login-button:hover {
            background-color: #FF5B4D;
            transform: scale(1.05);
        }

        .login-input:focus::placeholder {
            color: transparent;
        }

        .login-input:hover {
            border-color: #FD746C;
        }

        .login-input:hover::placeholder {
            color: #9CA3AF;
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="min-h-screen flex">

    <div class="w-1/2 flex items-center justify-center">
        <div class="max-w-md w-full rounded-lg overflow-hidden">
            <div class="px-6 py-8 cardlogin">
                <div class="text-center mb-6">
                    <img class="h-16 w-20 mx-auto" src="{{ URL::asset('/images/logo-removebg-preview.png') }}" alt="Logo">
                </div>
                <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="email" class="sr-only">Email address</label>
                            <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none login-input relative block w-full placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 sm:text-sm" placeholder="Email address">
                        </div>
                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none login-input relative block w-full placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 sm:text-sm" placeholder="Password">
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm login-checkbox">Remember me</label>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-sm">
                                <a href="{{ route('password.request') }}" class="font-medium login-checkbox hover:underline">Forgot your password?</a>
                            </div>
                        @endif
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white login-button">
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="w-1/2 login-bg"></div>
</div>

</body>
</html>
