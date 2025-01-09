<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importando a classe StoreUserRequest para validação de erros
use App\Http\Requests\StoreUserRequest;

// Models 
use App\Models\Usuario;

class UsuarioControler extends Controller
{
    public function cadastro() {
        return view('cadastro');
    }

    public function listar() {

        $usuarios = Usuario::all();

        return view('listar', compact('usuarios'));
    }

    public function cadastroPost(StoreUserRequest $request) {

        $request->validated();

        Usuario::create($request->only(['nome', 'email', 'senha']));

        return redirect()->back()->with('mensagem', 'Usuário cadastrado com sucesso!');
    }

    public function editar($id) {

        $usuario = Usuario::find($id);

        if (!$usuario) {
            return redirect()->back()->with('mensagem', 'Usuário não encontrado!');
        }

        return view('editar', compact('usuario'));
    }

    public function editarPost(StoreUserRequest $request) {

        $id = $request->input('id');
        $nome = $request->input('nome');
        $email = $request->input('email');
        $senha = $request->input('senha');

        $validate = $request->validated();

        // verifica se o usuário a ser atualizado existe
        $usuario = Usuario::find($id);

        if($usuario) {
            $usuario->update([
                'nome' => $nome,
                'email' => $email,
                'senha' => $senha
            ]);

            return redirect( route('listar') )->with('mensagem', 'Usuário atualizado com sucesso!');
        }
    }

    public function excluir($id) {

        $usuario = Usuario::find($id);

        if ($usuario) {
            $usuario->delete();
            return redirect()->back()->with('mensagem', 'Usuário excluído com sucesso!');
        } else {
            return redirect()->back()->with('mensagem', 'Usuário não encontrado!');
        }

    }
}
