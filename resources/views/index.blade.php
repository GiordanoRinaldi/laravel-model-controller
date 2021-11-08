<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @foreach ($movies as $movie)
    <div class="film">
        <h2>{{$movie->title}}</h2>
        <h3>{{$movie->original_title}}</h3>
        <h4>{{$movie->nationality}}</h4>
        <h5>{{$movie->date}}</h5>
        <h6>{{$movie->vote}}</h6>
    </div>
    @endforeach
</body>
</html>

