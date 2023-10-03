<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
            'dealer_name' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'credit_amount' => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'credit_reason' => 'required|string',
            'status' => 'required|string',
            'bank_id' => 'required|exists:banks,id',
        ];
    }
}
