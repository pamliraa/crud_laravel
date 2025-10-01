<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar</h1>

    <form action="{{route('update', $movie->id)}}" method="post">
        @method("put")
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" value="{{ $movie->name}}">

        <label for="director">Diretor:</label>
        <input type="text" name="director" value="{{ $movie->director}}">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>