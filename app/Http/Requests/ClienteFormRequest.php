<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'nombres'=>'required|max:500|regex:/^[\pL\s\-]+$/u',
            //'apellidos'=>'required|max:300',
            'email'=>'required|email|max:150',
            /* 'cursos' => 'required_if:curso_presente,true', */
            'codproducto' => 'sometimes|required',
            /* 'dni'=>'required|min:8|max:20', */
            'celular'=>'numeric|required|min:4',
            'profesion'=>'required|max:150|regex:/^[\pL\s\-]+$/u',
            'empresa'=>'required|max:150',
            //'carrera'=>'required|max:300',
            //'campus'=>'required|max:300',
            //'egreso'=>'required|min:4|max:4',
            // 'terminos'=>'required',
        ];
    }

    public function messages()
    {
        return[
            /* 'nombres.required' => 'El campos es requerido', */
            'nombres.regex' => 'El campo nombres solo puede contener letras.',

            /* 'apellidos.required' => 'El campos es requerido', */
            'profesion.regex' => 'El campo profesion solo puede contener letras.',
            
        ];
    }
}
