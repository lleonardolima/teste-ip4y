<?php

namespace App\Http\Requests;

use App\Rules\CPF;
use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
        return [
            'nome' => 'required',
            'cpf' => [
                'required',
                'unique:clientes',
                new CPF
            ],
            'sobrenome' => 'required',
            'data_nascimento' => 'required',
            'email' => 'required',
            'genero' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'nome.required' => 'O Nome é Obrigatório',
            'cpf.required' => 'O cpf é Obrigatório',
            'cpf.unique' => 'CPF já cadastrado',
            'sobrenome.required' => 'O sobrenome é Obrigatório',
            'data_nascimento.required' => 'A Data de Nascimento é Obrigatória',
            'email.required' => 'O email é Obrigatório',
            'genero.required' => 'O genero é Obrigatório'
        ];
    }
}
