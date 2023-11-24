<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:doctors,email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'speciality' => 'required|string',
            'department_id' => 'required|exists:departments,id',
        ];
    }
}
