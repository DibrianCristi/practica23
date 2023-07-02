<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
</head>

<body>
    <h1>Shopping Cart</h1>
    <a href="/">Home</a>
    @auth

        <h2>Electrica Items</h2>
        @foreach ($electricaItems as $item)
            <div>
                <h3>{{ $item->electrica->denumire }}</h3>
                <p>Price: {{ $item->electrica->pret }}</p>
                <p>Quantity: {{ $item->cantitate }}</p>
                <form action="{{ route('shopping-cart/remove', ['item' => $item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </div>
        @endforeach

        <h2>Instrumente Items</h2>
        @foreach ($instrumenteItems as $item)
            <div>
                <h3>{{ $item->instrumente->denumire }}</h3>
                <p>Price: {{ $item->instrumente->pret }}</p>
                <p>Quantity: {{ $item->cantitate }}</p>
                <form action="{{ route('shopping-cart/remove', ['item' => $item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </div>
        @endforeach

        <h2>Suruburi Items</h2>
        @foreach ($suruburiItems as $item)
            <div>
                <h3>{{ $item->suruburi->denumire }}</h3>
                <p>Price: {{ $item->suruburi->pret }}</p>
                <p>Quantity: {{ $item->cantitate }}</p>
                <form action="{{ route('shopping-cart/remove', ['item' => $item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </div>
        @endforeach

        <h2>Santehnica Items</h2>
        @foreach ($santehnicaItems as $item)
            <div>
                <h3>{{ $item->santehnica->denumire }}</h3>
                <p>Price: {{ $item->santehnica->pret }}</p>
                <p>Quantity: {{ $item->cantitate }}</p>
                <form action="{{ route('shopping-cart/remove', ['item' => $item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </div>
        @endforeach

        <h2>Uzcasnic Items</h2>
        @foreach ($uzcasnicItems as $item)
            <div>
                <h3>{{ $item->uzcasnic->denumire }}</h3>
                <p>Price: {{ $item->uzcasnic->pret }}</p>
                <p>Quantity: {{ $item->cantitate }}</p>
                <form action="{{ route('shopping-cart/remove', ['item' => $item->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </div>
        @endforeach

        <form action="/shopping-cart/submit" method="POST">
            @csrf
            <button type="submit">Complete Order</button>
        </form>
    @endauth
</body>

</html>
