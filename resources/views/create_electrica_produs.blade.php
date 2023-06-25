<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adauga produs</title>
</head>

<body>
    <h1>Adauga produs</h1>
    <form action="/electrica/create_electrica_produs" method="post">
        @csrf
        <input name="denumire" type="text" placeholder="Denumire">
        <input name="descriere" type="text" placeholder="Descriere">
        <input name="made_in" type="text" placeholder="Tara de producere">
        <input name="cantitate" type="number" placeholder="Cantitatea">
        <input name="pret" type="number" placeholder="Pret">
        <button>Submit</button>
    </form>
</body>

</html>
