<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'time',
        'patient_id',
        'doctor_id',
    ];

    // إذا كنت بحاجة إلى علاقة مع الجدول Patient، يمكنك تعريفها هنا
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    // إذا كنت بحاجة إلى علاقة مع الجدول Doctor، يمكنك تعريفها هنا
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
