<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Editar Filme</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h1 id="page-title">Editar Filme</h1>

    <form id="movie-form" action="{{ route('update', $movie->id) }}" method="post">
        @method("put")
        @csrf

        <label for="name" class="form-label">Nome do Filme:</label>
        <input type="text" name="name" id="name" class="form-input" value="{{ $movie->name }}" required>

        <label for="director" class="form-label">Diretor:</label>
        <input type="text" name="director" id="director" class="form-input" value="{{ $movie->director }}" required>

        <input type="submit" value="Enviar" class="btn">
    </form>

    <a href="{{ route('index') }}" class="back-link">← Voltar para lista</a>
</body>
</html>
