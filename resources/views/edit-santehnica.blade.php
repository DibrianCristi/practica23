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
    <form action="/santehnica/edit-santehnica/{{$santehnica->id}}" method="POST"> 
        @csrf
        @method('PUT')
        <input type="text" name="denumire" value="{{$santehnica->denumire}}">
        <input type="text" name="descriere" value="{{$santehnica->descriere}}">
        <input type="text" name="made_in" value="{{$santehnica->made_in}}">
        <input type="number" name="cantitate" value="{{$santehnica->cantitate}}">
        <input type="number" name="pret" value="{{$santehnica->pret}}">
        <button>Save Changes</button>
    </form>
    <a href="/santehnica">Back</a>
</body>
</html>