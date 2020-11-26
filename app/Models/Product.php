<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use SoftDeletes;
    use HasFactory;
    protected $table = 'products';
    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}