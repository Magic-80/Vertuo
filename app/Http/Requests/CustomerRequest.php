<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            "company" => ["required", "min:5"],
            'address' => ["required" , "min:5"],
            "zip_code" => ["integer", "min:1"],
            "city" => ["required", "string"],
            "county" => ["required", "string"],
            'phone' => ["required" , "min:10"],
            'mail' => ["required" , "string", "min:8"],
            'vat' => ["integer", "min:5"],
            'companyID' => ["interger","min:8"],
            'web_site' => ["required" , "string"],
        ];
    }
}
