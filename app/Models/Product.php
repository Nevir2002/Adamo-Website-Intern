<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function productAttributes(){
        return $this->hasMany(ProductAttribute::class);
    }
}
