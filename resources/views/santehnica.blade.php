<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SanTehnica</title>
</head>

<body>
    <a href="/">Home</a>
    @auth
    <p><a href="/santehnica/create_santehnica_produs">Adauga produs</a></p>
    <p><a href="/dashboard">Dashboard</a></p>
    @else 
    <p><a href="/login">Login</a></p>
    <p><a href="/register">Register</a></p>
    @endauth
    <h1>San Tehnica</h1>
    @foreach ($santehnica as $santehnica)
        <h1>{{ $santehnica['denumire'] }}</h1>
        {{ $santehnica['descriere'] }}
        {{ $santehnica['made_in'] }}
        {{ $santehnica['cantitate'] }}
        {{ $santehnica['pret'] }}
        @auth
        <p><a href="/santehnica/edit-santehnica/{{ $santehnica->id }}">Edit</a></p>
            <form action="/santehnica/delete-santehnica/{{ $santehnica->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        @endauth
    @endforeach
</body>

</html>
