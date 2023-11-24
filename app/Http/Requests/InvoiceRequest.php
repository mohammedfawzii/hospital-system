<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'patient_id' => 'required|exists:patients,id',
            'service_id' => 'required|exists:services,id',
            'invoice_date' => 'required|string',
            'total_amount' => 'required|string',
        ];
    }
}
