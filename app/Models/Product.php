<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'serial_id',
        'order_id'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function productAttributes(){
        return $this->hasMany(ProductAttribute::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->serial_id = self::generateProductId();
            $randomNumber = rand(1,6);
            $model->thumbnail = 'images/filler-image-' . $randomNumber . '.png';
        });
    }

    private static function generateProductId()
    {
        $serialId = 'PROD-' . Str::uuid();
        return $serialId;
    }
}
