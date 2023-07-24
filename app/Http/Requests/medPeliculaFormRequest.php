<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class medPeliculaFormRequest extends FormRequest
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
        
            'medPelDuracion' => 'date_format:H:i:s',
            'medPelTipo' => 'in:Animada,Liveaction,Caricatura',
            'medPelCostProd' => 'numeric|min:0',
            'medPelGananc' => 'numeric|min:0',
           
        ];
    }
}
