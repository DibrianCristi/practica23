<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regiser</title>
</head>
<body>
    <a href="/">Home</a>
    <h2>Register</h2>
    <form action="/register" method="POST">
    @csrf
    <input name="name" type="text" placeholder="Nume">
    <input name="email" type="text" placeholder="Email">
    <input name="password" type="password" placeholder="Parola">
    <button>Submit</button>
    </form>
</body>
</html>