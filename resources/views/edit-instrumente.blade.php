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
    <form action="/instrumente/edit-instrumente/{{$instrumente->id}}" method="POST"> 
        @csrf
        @method('PUT')
        <input type="text" name="denumire" value="{{$instrumente->denumire}}">
        <input type="text" name="descriere" value="{{$instrumente->descriere}}">
        <input type="text" name="made_in" value="{{$instrumente->made_in}}">
        <input type="number" name="cantitate" value="{{$instrumente->cantitate}}">
        <input type="number" name="pret" step=".01" value="{{$instrumente->pret}}">
        <button>Save Changes</button>
    </form>
    <a href="/instrumente">Back</a>
</body>
</html>