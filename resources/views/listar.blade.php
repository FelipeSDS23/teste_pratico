@extends('layouts.htmlBasico')

@section('conteudo')
    <main class="listar-container">
        <h1>Usuários Cadastrados</h1>
        <table class="tabela">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nome }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <a href="{{ route('editar') }}/{{ $usuario->id }}" class="botao editar">Editar</a>
                            <a href="{{ route('excluir') }}/{{ $usuario->id }}" class="botao excluir"
                                onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
