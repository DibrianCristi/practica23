<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SanTehnica</title>
</head>

<body>
    <a href="/">Home</a>
    <p><a href="/santehnica/create_santehnica_produs">Adauga produs</a></p>
    <h1>San Tehnica</h1>
    @foreach ($santehnica as $item)
        <h1>{{ $item['denumire'] }}</h1>
        {{ $item['descriere'] }}
        {{ $item['made_in'] }}
        {{ $item['cantitate'] }}
        {{ $item['pret'] }}
    @endforeach
</body>

</html>
