<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
    }

    public function prepareForValidation(){
        $this->merge([
            'zip_code' => $this->zipCode,
        ]);
    }

}
