<?php

namespace App\Http\Requests\Classe;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ClasseRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:30', Rule::unique('classes', 'name')->ignore($this->route('classe'))],
            'niveau_id' => ['required', 'exists:niveaux,id'],
            'serie_id' => ['nullable', 'exists:series,id'],
        ];
    }
}
