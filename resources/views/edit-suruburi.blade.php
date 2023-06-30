<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit produs</title>
</head>
<body>
    <h1>Edit produs</h1>
    <a href="/">Home</a>
    <form action="/suruburi/edit-suruburi/{{$suruburi->id}}" method="POST"> 
        @csrf
        @method('PUT')
        <input type="text" name="denumire" value="{{$suruburi->denumire}}">
        <input type="text" name="descriere" value="{{$suruburi->descriere}}">
        <input type="text" name="made_in" value="{{$suruburi->made_in}}">
        <input type="number" name="cantitate" value="{{$suruburi->cantitate}}">
        <input type="number" name="pret" step=".01" value="{{$suruburi->pret}}">
        <button>Save Changes</button>
    </form>
    <a href="/suruburi">Back</a>
</body>
</html>