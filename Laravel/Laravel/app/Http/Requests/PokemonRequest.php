<?php

namespace Pokes\Http\Requests;

use Pokes\Http\Requests\Request;

class PokemonRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
             'nombre'=>'required',
             'tipo'=>'required',
             'naturaleza'=>'required',
             'nivel'=>'required|numeric',
            
        ];
    }
    public function messages()
    {
        return[
          'nombre.required'=>'El nombre es Requerido',
          'tipo.required'=>'El tipo es requerido',
          'naturaleza.required'=>'La naturaleza es requerida',
          'nivel.required'=>'El nivel es requerido',
          'nivel.numeric'=>'El niverl debe ser numerico',
        ];
    }
}
