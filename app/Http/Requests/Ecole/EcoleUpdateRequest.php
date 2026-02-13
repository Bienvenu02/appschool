<?php

namespace App\Http\Requests\Ecole;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class EcoleUpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'code' => ['nullable', 'string', 'max:30'],
            'slogan' => ['nullable', 'string', 'max:60'],
            'ifu' => ['required', 'digits_between:1,20', 'max:20'],
            'email' => ['required', 'email', 'max:40'],
            'telephone' => ['required', 'string', 'max:20'],
            'adresse' => ['required', 'string', 'max:40'],
            'ville' => ['nullable', 'string', 'max:40'],
            'pays' => ['nullable', 'string', 'max:40'],
            'site_web' => ['nullable', 'url', 'max:60'],
            'description' => ['nullable', 'string', 'max:100'],
            'logo' => ['nullable', 'image', 'max:2048'],
            'active' => ['required', 'boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            
        ];
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     throw new HttpResponseException(
    //         redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput()
    //     );
    // }
}
