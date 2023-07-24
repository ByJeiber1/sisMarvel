<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LugarFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'lugarNombre' => 'required|string|max:60',
            'lugarFicticio' => 'sometimes|boolean',
            'lugarTipo' => 'required|string|max:20',
            'lugar_id' => 'integer'
        ];
    }
}
