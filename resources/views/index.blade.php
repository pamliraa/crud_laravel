<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Filmes</title>
</head>
<body>
    <h1>Filmes</h1>

    <ul>
        @foreach($movies as $movie)
        <li>
            {{ $movie->name }} 
            <a href="{{ route('edit', $movie->id) }}">Editar</a>
            <form action="{{ route('destroy', $movie->id) }}" method="post" style="display:inline">
                @method('delete')
                @csrf
                <input type="submit" value="Excluir" onclick="return confirm('Tem certeza que quer excluir?')">
            </form>
        </li>
        @endforeach
    </ul>

    <a href="{{ route('create') }}">Cadastrar</a>

</body>
</html>
