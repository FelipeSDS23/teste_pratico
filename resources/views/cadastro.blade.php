@extends('layouts.htmlBasico')

@section('conteudo')    
    <main class="cadastro-container">
        <h1>Cadastrar Usuário</h1>
        <form action="{{ route('cadastro') }}" method="post" class="formulario">
            @csrf
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required placeholder="Digite seu nome">

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required placeholder="Digite sua senha" minlength="6">

            <button type="submit">Cadastrar</button>
        </form>
    </main>
@endsection