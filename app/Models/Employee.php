<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'specialties',
        'hire_date',
        'status',
    ];

    protected $casts = [
        'hire_date' => 'date',
        'specialties' => 'array',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
