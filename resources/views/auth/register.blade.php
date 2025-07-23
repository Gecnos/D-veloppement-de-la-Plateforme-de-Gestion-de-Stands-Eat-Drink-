<<<<<<< HEAD
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
    <title>Inscription</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="place-content-center">
    @include("components.navbar")

    @session('status')
        <div class="p-4 bg-green-100">
            {{ $value }}
        </div>
    @endsession 

    <form action={{ route("register") }} method="post" class="w-[400px] m-auto pt-5 min-h-[400px]">
        @csrf
        <h1>Inscription form</h1>
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Fullname</legend>
                <input type="text" id="name" name="name" value="{{ old("name") }}" class="input">
                @error('name')
                    <p class="alert text-red-500"> {{ $message }} </p>
                @enderror
            </fieldset>
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
