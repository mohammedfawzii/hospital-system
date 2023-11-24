<?php
// app/Http/Requests/WardRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WardRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'type' => 'required|string',
            'capacity' => 'required|string',
        ];
    }
}
