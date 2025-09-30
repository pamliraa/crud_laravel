<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Filmes</h1>

    <ul>
        @foreach($movies as $movies)
        <li>{{$movies->name}} <a href="{{route('edit', $movie)}}"></a></li>
        @endforeach
    </ul>
  
</body>
</html>