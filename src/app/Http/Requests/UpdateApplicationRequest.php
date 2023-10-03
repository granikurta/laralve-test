<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApplicationRequest extends FormRequest
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
            'dealer_name' => 'sometimes|required|string|max:255',
            'contact_person' => 'sometimes|required|string|max:255',
            'credit_amount' => 'sometimes|required|numeric',
            'interest_rate' => 'sometimes|required|numeric',
            'credit_reason' => 'sometimes|required|string',
            'status' => 'sometimes|required|string',
            'bank_id' => 'sometimes|required|exists:banks,id',
        ];
    }
}
