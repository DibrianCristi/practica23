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
        @if (auth()->user()->is_admin)
            <p><a href="/instrumente/create_instrumente_produs">Adauga produs</a></p>
        @endif
        <p><a href="/dashboard">Dashboard</a></p>
    @else
        <p><a href="/login">Login</a></p>
        <p><a href="/register">Register</a></p>
    @endauth
    <h2>Instrumente</h2>
    @auth
        <a href="/shopping-cart">Shopping Cart</a>
    @endauth
    @foreach ($instrumente as $instrumente)
        <h1>{{ $instrumente['denumire'] }}</h1>
        <p>{{ $instrumente['descriere'] }}</p>
        <p>Made in {{ $instrumente['made_in'] }}</p>
        <p>Stoc: {{ $instrumente['cantitate'] }}</p>
        <p>Pret: {{ $instrumente['pret'] }}</p>
        @auth
            <form action="/add-to-cart/instrumente" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $instrumente->id }}">
                <input type="number" name="cart-cantitate" value="1">
                <button type="submit">Add to Cart</button>
            </form>
        @endauth
        @auth
            @if (auth()->user()->is_admin)
                <p><a href="/instrumente/edit-instrumente/{{ $instrumente->id }}">Edit</a></p>
                <form action="/instrumente/delete-instrumente/{{ $instrumente->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            @endif
        @endauth
    @endforeach
</body>

</html>
