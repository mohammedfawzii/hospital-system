<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NurseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'nurse_qualification' => 'required|string',
            'clinic_id' => 'required|exists:clinics,id',
        ];
    }
}
