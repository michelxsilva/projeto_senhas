<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'bank' =>'required|string|max:255',
            'user' =>'required|string|max:255',
            'cpf' =>'required|string|max:255',
            'agent_id' =>'required|string|max:255',
            'agent' =>'required|string|max:255',
            'approval' =>'required|string|max:255',
            'profile' =>'required|string|max:255',
            
            
        ];
    }
    public function messages()
    {
        return [
            'bank.required' => 'O campo Banco é obrigatório.',
            
            'user.required' => 'O campo Usuário é obrigatório.',
            
            'cpf.required' => 'O campo CPF é obrigatório.',
            
            'agent_id.required' => 'O campo ID do Agente é obrigatório.',

            'agent.required' => 'O campo Agente é obrigatório.',

            'approval.required' => 'O campo Aprovação é obrigatório.',

            'profile.required' => 'O campo Perfil é obrigatório.',
            
            
        ];
    }
}
