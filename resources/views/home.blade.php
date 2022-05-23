<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>List film:</h1>
    <div class="flex">
        @foreach ($movies as $movie)
            <div class='card'>
                <h2>Titolo: </h2>
                <p>{{ $movie['title'] }}</p>

                <h2>Titolo originale: </h2>
                <p>{{ $movie['original_title'] }}</p>

                <h2>Nazionalità: </h2>
                <p>{{ $movie['nationality'] }}</p>

                <h2>Data di uscita: </h2>
                <p>{{ $movie['date'] }}</p>

                <h2>Voto: </h2>
                <p>{{ $movie['vote'] }}</p>

            </div>
        @endforeach
    </div>
</body>

</html>
