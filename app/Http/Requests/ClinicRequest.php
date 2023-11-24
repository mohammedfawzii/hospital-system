<?php

// app/Http/Requests/ClinicRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'clinic_location' => 'required|string',
            'specialization' => 'required|string',
        ];
    }
}
