<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($moviesList as $movie)
    <div class="movie-card">
        <h2> {{ $movie['title'] }} </h2>
        <h3> {{ $movie['original_title'] }} </h3>
        <h3> {{ $movie['nationality'] }} </h3>
        <h3> {{ $movie['date'] }} </h3>
        <h3> {{ $movie['vote'] }} </h3>
    </div>
    @endforeach
</body>
</html>
