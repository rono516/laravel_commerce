<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    protected $fillable = ['registration', 'location', 'driver_name'];

    protected $casts = [
        'location' => 'array', // Cast the 'location' attribute to an array
    ];
}
