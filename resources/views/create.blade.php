<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Filme</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <h1> Cadastrar Filme</h1>

    <form id="movie-form" action="{{ route('store') }}" method="post">
        @csrf
        <label for="name">Nome do Filme:</label>
        <input type="text" name="name" id="name" required>

        <label for="director">Diretor:</label>
        <input type="text" name="director" id="director" required>

        <input type="submit" value="Enviar" class="btn">
    </form>

    <a href="{{ route('index') }}" class="back-link">← Voltar para lista</a>
</body>
</html>
