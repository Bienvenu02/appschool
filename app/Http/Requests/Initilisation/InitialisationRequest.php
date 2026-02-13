<?php

namespace App\Http\Requests\Initilisation;

use Illuminate\Foundation\Http\FormRequest;

class InitialisationRequest extends FormRequest
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
            // Informations école
            'name' => ['required', 'string', 'max:50'],
            'code' => ['nullable', 'string', 'max:30'],
            'slogan' => ['nullable', 'string', 'max:60'],
            'ifu' => ['required', 'digits_between:1,20'],
            'email' => ['required', 'email', 'max:40'],
            'telephone' => ['required', 'string', 'max:20'],
            'adresse' => ['required', 'string', 'max:40'],
            'ville' => ['required', 'string', 'max:40'],
            'pays' => ['nullable', 'string', 'max:40'],
            'site_web' => ['nullable', 'url', 'max:60'],
            'description' => ['nullable', 'string'],
            'logo' => ['required', 'image', 'max:4096'], // max 4Mo

            // Année scolaire
            'annee_scolaire' => [
                'required',
                'regex:/^\d{4}-\d{4}$/', // format 2024-2025
                'max:15'
            ],

            // Sites
            'sites' => ['required', 'array', 'min:1'],
            'sites.*.name' => ['required', 'string', 'max:40', 'unique:sites,name'],
            'sites.*.localisation' => ['nullable', 'string', 'max:50'],
            'sites.*.telephone' => ['required', 'string', 'max:20'],
            'sites.*.email' => ['nullable', 'email', 'max:50'],
            'sites.*.responsable' => ['required', 'string', 'max:50'],
            'sites.*.active' => ['nullable', 'boolean'],
            'sites.*.description' => ['nullable', 'string', 'max:100'],
            'sites.*.cycles' => ['nullable', 'array'],
            'sites.*.cycles.*' => ['string', 'in:maternelle,primaire,secondaire,lycee,universite'],
        ];
    }

    public function messages()
    {
        return [
            'sites.*.nom.unique' => 'Les noms des sites ne doivent pas être identique.',
        ];
    }
}
