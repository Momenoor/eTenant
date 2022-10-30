<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandlordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'                      => ['required', 'string', 'unique:landlords'],
            'title'                     => ['required'],
            'email'                     => ['required', 'email'],
            'phone'                     => ['required', 'numeric'],
            'tax_registration_number'   => ['sometimes', 'required'],
            'bank_name'                 => ['required'],
            'bank_account_number'       => ['required'],
            'create_user'               => ['sometimes', 'required'],
        ];
    }
}
