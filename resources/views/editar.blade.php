@extends('layouts.htmlBasico')

@section('conteudo')    
    <main class="cadastro-container">
        <h1>Editar Usuário</h1>
        <form action="{{ route('editar') }}" method="post" class="formulario">
            @csrf
            <input type="hidden" name="id" value="{{ $usuario->id }}">

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required placeholder="Digite seu nome" value="{{ $usuario->nome }}">

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required placeholder="Digite seu e-mail" value="{{ $usuario->email }}">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required placeholder="Digite sua senha" minlength="6" value="{{ $usuario->senha }}">

            <button type="submit">Editar</button>
        </form>
    </main>
@endsection