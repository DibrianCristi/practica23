<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instrumente</title>
</head>

<body>
    <a href="/">Home</a>
    <p><a href="/instrumente/create_instrumente_produs">Adauga produs</a></p>

    <h1>Instrumente</h1>
    @foreach ($instrumente as $item)
        <h1>{{ $item['denumire'] }}</h1>
        {{ $item['descriere'] }}
        {{ $item['made_in'] }}
        {{ $item['cantitate'] }}
        {{ $item['pret'] }}
    @endforeach
</body>

</html>
