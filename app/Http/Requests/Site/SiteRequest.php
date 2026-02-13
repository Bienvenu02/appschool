<?php

namespace App\Http\Requests\Site;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class SiteRequest extends FormRequest
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
        $siteId = $this->route('site');

        return [
            'name' => ['required', 'string', 'max:40', Rule::unique('sites', 'name')->ignore($siteId)],
            'localisation' => ['required', 'string', 'max:30'],
            'telephone' => ['required', 'string', 'max:20', Rule::unique('sites', 'telephone')->ignore($siteId)],
            'email' => ['required', 'email', 'max:50', Rule::unique('sites', 'email')->ignore($siteId)],
            'responsable' => ['required', 'string', 'max:50'],
            'description' => ['nullable', 'string', 'max:300'],
            'active' => ['sometimes', 'boolean'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            redirect()->back()
                ->withErrors($validator)
                ->withInput()
        );
    }
}
