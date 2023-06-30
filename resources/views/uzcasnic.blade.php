<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uz Casnic</title>
</head>

<body>
    <a href="/">Home</a>
    @auth
        @if (auth()->user()->is_admin)
            <p><a href="/uzcasnic/create_uzcasnic_produs">Adauga produs</a></p>
        @endif
        <p><a href="/dashboard">Dashboard</a></p>
    @else
        <p><a href="/login">Login</a></p>
        <p><a href="/register">Register</a></p>
    @endauth
    <h1>Uz Casnic</h1>
    @foreach ($uzcasnic as $uzcasnic)
        <h1>{{ $uzcasnic['denumire'] }}</h1>
        <p>{{ $uzcasnic['descriere'] }}</p>
        <p>Made in {{ $uzcasnic['made_in'] }}</p>
        <p>Stoc: {{ $uzcasnic['cantitate'] }}</p>
        <p>Pret: {{ $uzcasnic['pret'] }}</p>
            @auth
                @if (auth()->user()->is_admin)
                    <p><a href="/uzcasnic/edit-uzcasnic/{{ $uzcasnic->id }}">Edit</a></p>
                    <form action="/uzcasnic/delete-uzcasnic/{{ $uzcasnic->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                @endif
            @endauth
    @endforeach
</body>

</html>
