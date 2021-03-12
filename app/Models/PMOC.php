<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PMOC extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'pmoc';

    protected $primaryKey = 'id';

    protected $fillable = ['operations', 'hygiene', 'filters', 'terminals', 'drains', 'evap_temperature', 'thermostat',
        'leak', 'isolation', 'pressures', 'tensions', 'eletric_current', 'eletric_terminals', 'turbine_cleaning',
        'serpentine_cleaning', 'external_temperature', 'internal_temperature', 'return_temperature', 'return_insufflation',
        'done', 'machine_id'];

}
