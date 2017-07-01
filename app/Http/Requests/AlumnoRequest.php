<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
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
            'nombres'       =>'required|min:2|max:50',
            'apellidos'     =>'required|min:2|max:50',
            'especialidad'  =>'required|min:3|max:100',
            'ciclo'         =>'required' 
        ];
    }

    public function messages()
    {
        return [
            'nombres.required'       =>'Debe ingresar el nombre',
            'nombres.min'            =>'El nombre debe tener como mínimo 2 caracteres.',
            'nombres.max'            =>'El nombre debe tener como máximo 50 caracteres.',
            'apellidos.required'     =>'Debe ingresar los apellidos',
            'apellidos.min'          =>'Los apellidos deben tener como mínimo 2 caracteres.',
            'apellidos.max'          =>'Los apellidos deben tener como máximo 50 caracteres.',
            'especialidad.required'  =>'Debe ingresar la especialidad a la que pertenece',
            'especialidad.min'       =>'La especialidad debe tener como mínimo 2 caracteres.',
            'especialidad.max'       =>'La especialidad debe tener como máximo 50 caracteres.',

            'ciclo.required'         =>'Debe seleccionar al ciclo que pertenece.',
        ];
    }
}
