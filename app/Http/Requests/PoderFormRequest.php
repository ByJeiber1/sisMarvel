<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PoderFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'poderNombre'=>'max:60',
            'poderDescripcion'=>'max:60',
        ];
    }
}
