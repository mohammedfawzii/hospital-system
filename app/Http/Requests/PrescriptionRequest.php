<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrescriptionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'instruction' => 'required|string',
            'medication' => 'required|string',
            'appointment_id' => 'required|exists:appointments,id',
        ];
    }
}
