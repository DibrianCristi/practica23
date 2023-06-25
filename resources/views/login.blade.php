<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <a href="/">Home</a>
    <div>
        <h2>login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Log in</button>
        </form>
    </div>
</body>

</html>
