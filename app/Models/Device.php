<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'brand_id',
        'model_number',
        'series',
        'name',
        'description',
        'image_path',
        'asin'
    ];

    public function GetImagePath()
    {
        return env('DOMAIN_URL') . Storage::url($this->image_path);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    
    /**
     * Get the specifications for the device.
     */
    public function specifications()
    {
        return $this->hasMany(Specification::class);
    }

    /**
     * Get the features for the device.
     */
    public function features()
    {
        return $this->hasMany(Feature::class);
    }
}
