<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="place-content-center">
    @include("components.navbar")

    <form action={{ route("contact") }} method="post" class="w-[400px] m-auto pt-5 min-h-[400px]">
        @csrf
        <h1>Contact form</h1>
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Email</legend>
                <input type="email" id="email" name="email" value="{{ old("email") }}" class="input">
                @error('email')
                    <p class="alert text-red-500"> {{ $message }} </p>
                @enderror
            </fieldset>
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Fullname</legend>
                <input type="text" id="fullname" name="fullname" value="{{ old("fullname") }}" class="input">
                @error('fullname')
                    <p class="alert text-red-500"> {{ $message }} </p>
                @enderror
            </fieldset>
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                <legend class="fieldset-legend">Contact</legend>
                <input type="text" id="contact" name="phoneNumber" value="{{ old("phoneNumber") }}" class="input">
                @error('phoneNumber')
                    <p class="alert text-red-500"> {{ $message }} </p>
                @enderror
            </fieldset>
        <button class="btn btn-primary mt-5">Submit</button>
    </form>

    <section>
        @auth
        <h1 class="mt-20 title text-center">Liste des étudiants</h1>
        <table class="table  w-1/2 mx-auto">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Nom complet</th>
                    <th>Numéro de téléphone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->full_name }}</td>
                        <td>{{ $contact->phone_number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endauth
    </section>
</body>
</html>