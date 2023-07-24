<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonajeFormRequest extends FormRequest
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
            'perNombre1'=>'max:60',
            'perNombre2'=>'max:60',
            'perApellido1'=>'max:60',
            'perApellido2'=>'max:60',
            'perColorPelo'=>'max:60',
            'perColorOjos'=>'max:60',
            'perEdoMarital'=>'string|in:Soltero,Soltera,Casado,Casada,Viudo,Viuda,Separado,Separada,Divorciado,Divorciada',
            'perFraseMasCelebre'=>'max:60',
            'perGenero'=>'string|in:M,F,DESC,OTRO',
            'perPrimeraAparicionComic'=>'integer',
            'personajeCivil'=>'integer',
            'personajeHeroe'=>'integer',
            'personajeVillano'=>'integer'
        ];
    }
}
