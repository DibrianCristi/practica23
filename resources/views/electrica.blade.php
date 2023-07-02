<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electrica</title>
</head>

<body>
    <a href="/">Home</a>
    @auth
        @if (auth()->user()->is_admin)
            <p><a href="/electrica/create_electrica_produs">Adauga produs</a></p>
        @endif
        <p><a href="/dashboard">Dashboard</a></p>
    @else
        <p><a href="/login">Login</a></p>
        <p><a href="/register">Register</a></p>
    @endauth
    <h2>Electrica</h2>
    @auth
        <a href="/shopping-cart">Shopping Cart</a>
        @endauth @foreach ($electrica as $electrica)
            <h1>{{ $electrica['denumire'] }}</h1>
            <p>{{ $electrica['descriere'] }}</p>
            <p>Made in {{ $electrica['made_in'] }}</p>
            <p>Stoc: {{ $electrica['cantitate'] }}</p>
            <p>Pret: {{ $electrica['pret'] }}</p>
            @auth
                <form action="/add-to-cart/electrica" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $electrica->id }}">
                    <input type="number" name="cart-cantitate" value="1">
                    <button type="submit">Add to Cart</button>
                </form>
            @endauth
            @auth
                @if (auth()->user()->is_admin)
                    <p><a href="/electrica/edit-electrica/{{ $electrica->id }}">Edit</a></p>
                    <form action="/electrica/delete-electrica/{{ $electrica->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                @endif
            @endauth
        @endforeach
    </body>

    </html>
