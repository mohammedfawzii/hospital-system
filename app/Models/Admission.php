<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'ward_id',
        'discharge_date',
    ];


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
