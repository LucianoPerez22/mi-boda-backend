<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'phone',
        'email',
        'confirmo_asistencia'
    ];

    protected $casts = [
        'confirmo_asistencia' => 'boolean'
    ];
}
