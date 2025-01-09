<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste Prático</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('layouts.menu')

    @if (session('mensagem'))
        <div class="mensagem">
            {{ session('mensagem') }}
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="erro">
                {{ $error }}
            </div>
        @endforeach
    @endif
    
    @yield('conteudo')
</body>
</html>