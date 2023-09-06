<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //cambiar esta parte: 
            'id_user' => 'required|integer', 
            'date_order' => 'required|date', 
            'id_status' => 'required|integer', 
            'cost_total_order' => 'required|numeric',
        ];
    }
}
