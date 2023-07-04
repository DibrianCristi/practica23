<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DashBoard</title>
</head>

<body>
    <h1>DashBoard</h1>
    <a href="/">Home</a>
    @auth
    @if (auth()->user()->is_admin)
    <a href="/order">View Orders</a>
    @endif
        <form action="/logout" method="POST">
            @csrf
            <button>Log out</button>
        </form>

    @endauth
    @guest
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    @endguest
</body>

</html>
