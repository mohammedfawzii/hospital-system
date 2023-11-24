<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'service_id',
        'invoice_date',
        'total_amount',
    ];


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }


    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
