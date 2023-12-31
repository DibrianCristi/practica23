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
        @if (auth()->user()->is_admin)
            <p><a href="/santehnica/create_santehnica_produs">Adauga produs</a></p>
        @endif
        <p><a href="/dashboard">Dashboard</a></p>
    @else
        <p><a href="/login">Login</a></p>
        <p><a href="/register">Register</a></p>
    @endauth
    <h2>San Tehnica</h2>
    @auth
        <a href="/shopping-cart">Shopping Cart</a>
    @endauth

    @foreach ($santehnica as $santehnica)
        <h1>{{ $santehnica['denumire'] }}</h1>
        <p>{{ $santehnica['descriere'] }}</p>
        <p>Made in {{ $santehnica['made_in'] }}</p>
        <p>Stoc: {{ $santehnica['cantitate'] }}</p>
        <p>Pret: {{ $santehnica['pret'] }}</p>
        @auth
            <form action="/add-to-cart/santehnica" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $santehnica->id }}">
                <input type="number" name="cart-cantitate" value="1">
                <button type="submit">Add to Cart</button>
            </form>
        @endauth
        @auth
            @if (auth()->user()->is_admin)
                <p><a href="/santehnica/edit-santehnica/{{ $santehnica->id }}">Edit</a></p>
                <form action="/santehnica/delete-santehnica/{{ $santehnica->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            @endif
        @endauth
    @endforeach
</body>

</html>
