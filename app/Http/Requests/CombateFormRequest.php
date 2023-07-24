<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CombateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'objetoID_fk' => 'required|integer',
            'poderID_fk' => 'required|integer',
            'combateLugar' => 'required|integer',
            'combateFecha' => 'required|date',
            'combateDescrp' => 'nullable|string|max:60',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
}
