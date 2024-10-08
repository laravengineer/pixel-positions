<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet"
    >
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="pb-20 text-white bg-black font-hanken-grotesk">
    <div class="px-10">
        <nav class="flex items-center justify-between py-4 border-b border-white/10">
            <div>
                <a href="{{ route('home') }}">
                    <img
                        src="{{ Vite::asset('resources/images/logo.svg') }}"
                        alt=""
                    >
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">
                    {{ __('Jobs') }}
                </a>
                <a href="#">
                    {{ __('Careers') }}
                </a>
                <a href="#">
                    {{ __('Salaries') }}
                </a>
                <a href="#">
                    {{ __('Companies') }}
                </a>
            </div>
            
            @auth
                <div class="flex space-x-6 font-bold">
                    <a href="{{ route('job-create') }}">
                        {{ __('Post a Job') }}
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        @method('DELETE')
                        <button>Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="{{ route('user-form') }}">
                        {{ __('Sign Up') }}
                    </a>
                    <a href="{{ route('login-form') }}">
                        {{ __('Log In') }}
                    </a>
                </div>
            @endguest
            
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>