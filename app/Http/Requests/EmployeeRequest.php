<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
         $rules = [
                'name' => 'required|string',
                'username' => 'required|string',
                'country' => 'required|string',
                'date_of_birth' => 'required|date',
                'hiring_date' => 'required|date',
                'status' => 'required|boolean',
                'area' => 'required|string',
                'current_position' => 'required|string',
                'commission' => 'required|integer',
            ];
        if ($this->getMethod() == 'PUT') {
            $rules = [
                'name' => 'string',
                'username' => 'string',
                'country' => 'string',
                'date_of_birth' => 'date',
                'hiring_date' => 'date',
                'status' => 'boolean',
                'area' => 'string',
                'current_position' => 'string',
                'commission' => 'integer',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre completo es requerido',
            'name.string' => 'El nombre debe ser una cadena de texto',

            'username.required' => 'El nombre usuario es requerido',
            'username.string' => 'El nombre debe ser cadena de texto',

            'country.required' => 'Selecciona un país',
            'country.string' => 'La marca debe ser una cadena de texto',

            'date_of_birth.required' => 'La fecha de nacimiento es requerida',
            'date_of_birth.date' => 'Ingrese una fecha correcta',

            'hiring_date.required' => 'La fecha de contratación es requerida',
            'hiring_date.date' => 'Ingrese una fecha correcta',

            'status.required' => 'El estado es requerido',
            'status.required' => 'El estado debe ser booleano',

            'area.required' => 'Selecciona un área',
            'area.string' => 'El área debe ser una cadena de texto',

            'current_position.required' => 'Selecciona un cargo',
            'current_position.string' => 'El cargo actual debe ser una cadena de texto',

            'commission.required' => 'La comisión es requerida',
            'commission.integer' => 'La comisión debe ser un valor entero',
        ];
    }
}