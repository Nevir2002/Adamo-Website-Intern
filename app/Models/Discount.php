<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity', // total number of discounts, reduced on application
        'discount_percentage'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

}
