<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';

    protected $fillable = ['device_id', 'parameter_id', 'value', 'recorded_at'];
}
