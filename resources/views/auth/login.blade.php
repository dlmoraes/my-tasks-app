<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen overflow-hidden font-sans antialiased">

    <div class="flex justify-between w-full bolhas">
        <span style="--i: 7.5;"></span>
        <span style="--i: 8;"></span>
        <span style="--i: 24;"></span>
        <span style="--i: 10.2;"></span>
        <span style="--i: 18;"></span>
        <span style="--i: 11;"></span>
        <span style="--i: 15;"></span>
        <span style="--i: 5;"></span>
        <span style="--i: 4;"></span>
        <span style="--i: 6;"></span>
        <span style="--i: 12;"></span>
        <span style="--i: 2;"></span>
        <span style="--i: 16;"></span>
        <span style="--i: 9;"></span>
        <span style="--i: 13;"></span>
        <span style="--i: 15.5;"></span>
        <span style="--i: 15;"></span>
        <span style="--i: 14;"></span>
        <span style="--i: 7;"></span>
        <span style="--i: 18.1;"></span>
        <span style="--i: 24;"></span>
        <span style="--i: 17;"></span>
        <span style="--i: 11.1;"></span>
        <span style="--i: 13.3;"></span>
        <span style="--i: 15;"></span>
        <span style="--i: 3;"></span>
        <span style="--i: 1;"></span>
        <span style="--i: 6;"></span>
        <span style="--i: 18.4;"></span>
        <span style="--i: 2;"></span>
        <span style="--i: 16;"></span>
        <span style="--i: 9;"></span>
        <span style="--i: 13;"></span>
        <span style="--i: 18.2;"></span>
        <span style="--i: 15;"></span>
        <span style="--i: 10;"></span>
    </div>

    <div class="flex flex-col items-center justify-center min-h-screen gap-4">
        <div class="card bg-base-200 w-96">
            <figure class="pt-4">
                <x-breeze.application-logo class="w-20 h-20 text-gray-400/90" />
            </figure>

            <div class="card-body">
                <div class="w-full overflow-hidden sm:max-w-md">
                    <!-- Session Status -->
                    <x-breeze.auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="space-y-4">
                            <x-breeze.input-label for="email" :value="__('Email')" />
                            <x-breeze.text-input id="email" class="block w-full mt-1" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                            <x-breeze.input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4 space-y-4">
                            <x-breeze.input-label for="password" :value="__('Password')" />

                            <x-breeze.text-input id="password" class="block w-full mt-1" type="password"
                                name="password" required autocomplete="current-password" />

                            <x-breeze.input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500"
                                    name="remember">
                                <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-breeze.primary-button class="ms-3">
                                {{ __('Log in') }}
                            </x-breeze.primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
