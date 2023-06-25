<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Proiect</title>

<body>
    <h1>proiect</h1>
    @auth
        <form action="/logout" method="POST">
            @csrf
            <button>Log out</button>
        </form>
        @else
        <a href="/login">Login</a>
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
