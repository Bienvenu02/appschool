<?php

namespace App\Http\Requests\User;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $userId = $this->route('utilisateur');

        return [
            // Informations générales
            'name' => ['required', 'string', 'max:40', Rule::unique('users', 'name')->ignore($userId)],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')->ignore($userId)],
            'telephone' => ['nullable', 'string', 'max:20'],
            'active' => ['sometimes', 'boolean'],

            // Accès et statut
            'roles' => ['required', 'array'],
            'active' => ['sometimes', 'boolean'],
        ];
    }
}
