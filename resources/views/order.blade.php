<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
</head>

<body>
    @auth
    @if (auth()->user()->is_admin)
    <a href="/">Home</a>
    <h2>Orders</h2>
    @foreach ($orders as $order)
    <div>
        <h1>Order ID: {{ $order->id }}</h1>
        <p>User ID: {{ $order->user_id }}</p>
        <p>Product Type: {{ $order->product_type }}</p>
        <p>Product ID: {{ $order->product_id }}</p>
        <p>Cantitate: {{ $order->cantitate }}</p>
        <form action="/order/complete/{{ $order->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Complete Order</button>
        </form>
    </div>
    @endforeach
    @endif
    @endauth
</body>

</html>
