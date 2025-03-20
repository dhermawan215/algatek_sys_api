<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'devices';
    protected $fillable = ['company_id', 'code', 'device_name', 'device_key', 'longitude', 'latitude'];
}
