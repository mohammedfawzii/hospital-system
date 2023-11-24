<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Prescription extends Model
{
    use HasFactory;
    protected $fillable = [
        'instruction',
        'medication',
        'appointment_id',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
