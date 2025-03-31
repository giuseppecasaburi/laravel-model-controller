<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film preferiti</title>
</head>

<body>
    <h1>I miei film preferiti</h1>
    @foreach ($movies as $movie)
        <div class="card">
            <h2>{{$movie["title"]}}</h2>
            <h3>{{$movie["original_title"]}}</h3>
            <p>
                <span>{{$movie["nationality"]}}</span>
                <span>{{$movie["date"]}}</span>
            </p>
            <p>{{$movie["vote"]}}</p>
        </div>
    @endforeach


</body>

</html>
