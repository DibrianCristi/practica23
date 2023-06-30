<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suruburi</title>
</head>

<body>
    <a href="/">Home</a>
    @auth
        @if (auth()->user()->is_admin)
            <p><a href="/suruburi/create_suruburi_produs">Adauga produs</a></p>
        @endif
        <p><a href="/dashboard">Dashboard</a></p>
    @else
        <p><a href="/login">Login</a></p>
        <p><a href="/register">Register</a></p>
    @endauth
    <h1>Suruburi</h1>
    @foreach ($suruburi as $suruburi)
        <h1>{{ $suruburi['denumire'] }}</h1>
        <p>{{ $suruburi['descriere'] }}</p>
        <p>Made in {{ $suruburi['made_in'] }}</p>
        <p>Stoc: {{ $suruburi['cantitate'] }}</p>
        <p>Pret: {{ $suruburi['pret'] }}</p>
            @auth
                @if (auth()->user()->is_admin)
                    <p><a href="/suruburi/edit-suruburi/{{ $suruburi->id }}">Edit</a></p>
                    <form action="/suruburi/delete-suruburi/{{ $suruburi->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                @endif
            @endauth
    @endforeach
</body>

</html>
