<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->input('id'); // recupera o id do body

        return [
            'nome' => 'required|max:100',
            'email' => [
                'required',
                'email',
                'max:150',
                Rule::unique('usuarios', 'email')->ignore($id), // permite que na atualização o usuário continue com o mesmo e-mail
            ],
            'senha' => 'required|min:6|max:255'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O nome é obrigatório.',
            'nome.max' => 'O nome deve ter menos de 100 caracteres.',
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'E-mail inválido.',
            'email.max' => 'O E-mail deve ter menos de 150 caracteres.',
            'senha.required' => 'O senha é obrigatório.',
            'senha.min' => 'A senha deve ter pelo menos 6 caracteres.',
            'senha.max' => 'A senha deve ter menos de 255 caracteres.',
            'email.unique' => 'Este e-mail já está em uso por outro usuário.'
        ];
    }
}
