<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class changeForcePasswordRequest extends FormRequest
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
            'current_password' => ['required', 'current_password'],
            'new_password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
                'different:current_password', // différent de l’actuel
            ]
        ];
    }

    public function messages()
    {
        return [
            'current_password.required' => 'Veuillez entrer votre mot de passe actuel.',
            'new_password.required' => 'Veuillez saisir un nouveau mot de passe.',
            'new_password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'new_password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            'new_password.different' => 'Le nouveau mot de passe doit être différent de l’ancien.',
        ];
    }
}
