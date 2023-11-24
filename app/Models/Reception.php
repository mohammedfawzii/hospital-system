<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Reception extends Model
{
    use HasFactory;
    protected $fillable = [
        'clinic_id',
        'name',
        'receptionist_contact_info',
    ];

    // إذا كنت بحاجة إلى علاقة مع الجدول Clinic، يمكنك تعريفها هنا
    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }
}
