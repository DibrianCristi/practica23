<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Optim Construct</title>

<body>
    <h1>Optim Construct</h1>
    @auth
        <a href="/shopping-cart">Shopping Cart</a>
    @endauth

    @auth
        <a href="/dashboard">Dashboard</a>
    @else
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @endauth

    <ul>
        <li><a href="/suruburi">Suruburi</li>
        <li><a href="/electrica">Electrica</li>
        <li><a href="/uzcasnic">Uz Casnic</li>
        <li><a href="/santehnica">SanTehnica</li>
        <li><a href="/instrumente">Instrumente</li>
    </ul>
</body>

</html>
