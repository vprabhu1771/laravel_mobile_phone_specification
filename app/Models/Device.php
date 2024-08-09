<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'model_number',
        'series',
        'name',
        'description'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
