<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $method = $this->method();
        if ($method === 'PUT') {
            return [
                'name' => ['required'],
                'email' => ['required', 'email'],
                'phone' => ['required'],
                'address' => ['required'],
                'city' => ['required'],
                'country' => ['required'],
                'zipCode' => ['required'],
                'password' => ['required', 'min:8'],
            ];
        } else {
            return [
                'name' => ['sometimes', 'required'],
                'email' => ['sometimes', 'required', 'email'],
                'phone' => ['sometimes', 'required'],
                'address' => ['sometimes', 'required'],
                'city' => ['sometimes', 'required'],
                'country' => ['sometimes', 'required'],
                'zipCode' => ['sometimes', 'required'],
            ];
        }

    }

    public function prepareForValidation()
    {
        if ($this->zipCode){
            $this->merge([
                'zip_code' => $this->zipCode,
            ]);
        }
    }
}
