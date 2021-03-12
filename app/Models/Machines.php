<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machines extends Model
{
    use HasFactory;

    protected $fillable = ['tag', 'location', 'fixed_occupants', 'floating_occupants', 'evap_model',
        'capacity', 'fluid', 'description'];

}
