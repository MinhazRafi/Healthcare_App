<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function doctor()
    {
        return $this->belongsTo(doctor::class,'doctor_id');
    }
}
