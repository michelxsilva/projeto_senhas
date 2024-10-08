<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'bank' => ['required', 'string', 'max:255'],
            'user' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'size:11', 'regex:/^\d{11}$/'],
            'agent_id' => ['required', 'integer'],
            'agent' => ['required', 'string', 'max:255'],
            'approval' => ['required', 'string'],
            'profile' => ['required', 'string', 'max:255'],
        ];
    }
}
