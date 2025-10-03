<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Filmes</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <div id="top-link-container">
        <a href="{{ route('create') }}" id="top-link" class="btn">+ Cadastrar Novo Filme</a>
    </div>
    <h1>Filmes</h1>

    <ul id="movie-list">
        @foreach($movies as $movie)
        <li class="movie-item">
            <div class="movie-info">
                <strong>{{ $movie->name }}</strong><br>
                <small>Diretor: {{ $movie->director }}</small>
            </div>

            <div class="movie-actions">
                <a href="{{ route('edit', $movie->id) }}" class="btn">Editar</a>
                <form action="{{ route('destroy', $movie->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Excluir" class="btn" onclick="return confirm('Tem certeza que quer excluir?')">
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</body>
</html>
