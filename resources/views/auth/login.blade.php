<<<<<<< HEAD
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf   
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        @include("components.navbar")
    </div>
    @session('status')
        <div class="p-4 bg-green-100">
            {{ $value }}
        </div>
    @endsession 

    <form action={{ route("login") }} method="post" class="w-[400px] m-auto pt-5 min-h-[400px]">
        @csrf
        <h1 class="title h2">Login form</h1>
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Email</legend>
                <input type="email" id="email" name="email" value="{{ old("email") }}" class="input">
                @error('email')
                    <p class="alert text-red-500"> {{ $message }} </p>
                @enderror
            </fieldset>
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Password</legend>
                <input type="password" id="password" name="password" value="{{ old("password") }}" class="input">
                @error('password')
                    <p class="alert text-red-500"> {{ $message }} </p>
                @enderror
            </fieldset>
        <button class="btn btn-primary mt-5">Submit</button>
    </form>
</body>
</html>
>>>>>>> 2e53d3f (Setting up  mail sending and adding some middlewares)
