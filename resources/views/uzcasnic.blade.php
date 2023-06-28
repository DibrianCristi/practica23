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
    <p><a href="/uzcasnic/create_uzcasnic_produs">Adauga produs</a></p>
    <p><a href="/dashboard">Dashboard</a></p>
    @else 
    <p><a href="/login">Login</a></p>
    <p><a href="/register">Register</a></p>
    @endauth
    <h1>Uz Casnic</h1>
    @foreach ($uzcasnic as $uzcasnic)
        <h1>{{ $uzcasnic['denumire'] }}</h1>
        {{ $uzcasnic['descriere'] }}
        {{ $uzcasnic['made_in'] }}
        {{ $uzcasnic['cantitate'] }}
        {{ $uzcasnic['pret'] }}
        @auth
        <p><a href="/uzcasnic/edit-uzcasnic/{{ $uzcasnic->id }}">Edit</a></p>
            <form action="/uzcasnic/delete-uzcasnic/{{ $uzcasnic->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
            </form>
        @endauth
    @endforeach
</body>

</html>
