<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_id', 
        'key', 
        'value'
    ];

     /**
     * Get the device that owns the specification.
     */
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
