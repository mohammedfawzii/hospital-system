<?php
// app/Http/Requests/ReceptionRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceptionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'clinic_id' => 'required|exists:clinics,id',
            'name' => 'required|string',
            'receptionist_contact_info' => 'required|string',
        ];
    }
}
