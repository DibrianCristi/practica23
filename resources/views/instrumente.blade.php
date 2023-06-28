<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instrumente</title>
</head>

<body>
    <a href="/">Home</a>
    @auth
    <p><a href="/instrumente/create_instrumente_produs">Adauga produs</a></p>
    <p><a href="/dashboard">Dashboard</a></p>
    @else
    <p><a href="/login">Login</a></p>
    <p><a href="/register">Register</a></p>
    @endauth
    <h1>Instrumente</h1>
    @foreach ($instrumente as $instrumente)
        <h1>{{ $instrumente['denumire'] }}</h1>
        {{ $instrumente['descriere'] }}
        {{ $instrumente['made_in'] }}
        {{ $instrumente['cantitate'] }}
        {{ $instrumente['pret'] }}
        @auth
        <p><a href="/instrumente/edit-instrumente/{{ $instrumente->id }}">Edit</a></p>
            <form action="/instrumente/delete-instrumente/{{ $instrumente->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        @endauth
    @endforeach
</body>

</html>
